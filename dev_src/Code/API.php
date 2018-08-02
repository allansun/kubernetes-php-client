<?php

namespace CodeGenerator\Code;


use Camel\CaseTransformer;
use Camel\Format\CamelCase;
use Camel\Format\SnakeCase;
use CodeGenerator\Utility;
use Kubernetes\AbstractAPI;
use OpenAPI\Schema\V2\OperationObject;
use OpenAPI\Schema\V2\ParameterObject;
use OpenAPI\Schema\V2\ResponseObject;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlock\Tag\GenericTag;
use Zend\Code\Generator\DocBlock\Tag\ParamTag;
use Zend\Code\Generator\DocBlock\Tag\ReturnTag;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;

class API extends AbstractClassFile
{
    protected $kubernetesNamespace = 'Kubernetes\\API';

    public function __construct(string $classname)
    {
        parent::__construct([]);

        $this->setNamespace($this->kubernetesNamespace);


        $this->ClassGenerator = new ClassGenerator();
        $this->ClassGenerator
            ->setNamespaceName($this->kubernetesNamespace)
            ->setName(Utility::filterSpecialWord($classname))
            ->setExtendedClass(AbstractAPI::class);

        $this->setClass($this->ClassGenerator);

        $this->initFilename();
    }

    function parseMethod(OperationObject $OperationObject, string $path, string $operation)
    {
        $apiKind   = $OperationObject->getPatternedFields()
                     [KubernetesExtentions::GROUP_VERSION_KIND][KubernetesExtentions::KIND];
        $apiAction = $this->parseApiAction($OperationObject, $apiKind);

        echo $apiKind . ' : ' . $apiAction .
             ' : ' . $OperationObject->operationId .
             PHP_EOL;


        $MethodGenerator   = new MethodGenerator($apiAction);
        $DocBlockGenerator = new DocBlockGenerator($OperationObject->description);

        $MethodGenerator->setFlags(MethodGenerator::FLAG_PUBLIC);
        $MethodGenerator->setBody($this->generateMethodBody($OperationObject, $path, $operation));

        [$methodParameters, $queryParameters] = $this->generateParameters($OperationObject, $path);
        $defaultQueryParameters = $OperationObject->parameters ?: [];
        $MethodGenerator->setParameters($methodParameters);

        $tags = [];
        foreach ($queryParameters as $Parameter) {
            /** @var ParameterObject $Parameter */
            $tags[] = new GenericTag('configkey', $Parameter->name . "\t" . $Parameter->type);
        }
        foreach ($defaultQueryParameters as $Parameter) {
            /** @var ParameterObject $Parameter */
            if ('query' == $Parameter->in) {
                $tags[] = new GenericTag('configkey', $Parameter->name . "\t" . $Parameter->type);
            }
        }

        foreach ($methodParameters as $Parameter) {
            /** @var ParameterGenerator $Parameter $ParamTag */

            $tags[] = new ParamTag($Parameter->getName(),
                (!$Parameter->getType() || in_array($Parameter->getType(), self::$internalPhpTypes))
                    ? $Parameter->getType()
                    : $this->getUseAlias($Parameter->getType())
            );
        }

        $responseTypes = [];
        foreach ($OperationObject->responses->getPatternedFields() as $ResponseObject) {
            /** @var ResponseObject $ResponseObject */
            if ($ResponseObject->schema) {
                if ($ResponseObject->schema->_ref) {
                    $responseTypes[$ResponseObject->schema->_ref] =
                        $this->getUseAlias('\\Kubernetes\\Model\\' .
                                           Utility::convertRefToClass($ResponseObject->schema->_ref));
                } else {
                    $responseTypes[$ResponseObject->schema->type] = $ResponseObject->schema->type;
                }
            }
        }

        $tags[] = new ReturnTag(implode('|', $responseTypes) . '|mixed');

        $DocBlockGenerator->setTags($tags);
        $MethodGenerator->setDocBlock($DocBlockGenerator);
        $this->ClassGenerator->addMethodFromGenerator($MethodGenerator);
    }

    protected function parseApiAction(OperationObject $OperationObject, string $apiKind): string
    {
        $apiAction = $OperationObject->operationId;

        $Transformer = new CaseTransformer(new SnakeCase(), new CamelCase());
        $tag         = ucfirst($Transformer->transform($OperationObject->tags[0]));

        $apiAction = str_replace($tag, '', $apiAction);
        $apiAction = str_replace($apiKind, '', $apiAction);
        $apiAction = str_replace('Namespaced', '', $apiAction);

        if ($this->ClassGenerator->hasMethod($apiAction)) {
            $apiAction .= $tag;
        }

        return $apiAction;
    }

    protected function generateMethodBody(OperationObject $OperationObject, string $path, string $operation): string
    {
        $body               = '';
        $queryParameterBody = '';
        [$methodParameters, $queryParameters] = $this->generateParameters($OperationObject, $path);
        $pathParameters = $this->parsePathParameters($path);

        if ($pathParameters) {
            foreach ($pathParameters[0] as $index => $pathParameter) {
                $path = str_replace($pathParameter, '{$' . $pathParameters[1][$index] . '}', $path);
            }
        }

        $queryParameterBody .= "\t\t,[" . PHP_EOL;
        foreach ($methodParameters as $MethodParameter) {
            /** @var ParameterGenerator $MethodParameter */
            if ('Model' == $MethodParameter->getName()) {
                $queryParameterBody .= "\t\t\t'json' => \$Model->getArrayCopy()," . PHP_EOL;
            }
        }
        if (0 < count($queryParameters)) {
            $queryParameterBody .= "\t\t\t'query' => \$queries," . PHP_EOL;
        }
        $queryParameterBody .= "\t\t]" . PHP_EOL;

        $body .= 'return $this->parseResponse(' . PHP_EOL;
        $body .= "\t" . '$this->client->request(\'' . $operation . '\',' . PHP_EOL;
        $body .= "\t\t" . "\"{$path}\"" . PHP_EOL;

        if (0 < strlen($queryParameterBody)) {
            $body .= $queryParameterBody;
        }

        $body .= "\t)" . PHP_EOL;
        $body .= "\t, '{$OperationObject->operationId}'" . PHP_EOL;
        $body .= ');';

        return $body;
    }

    protected function generateParameters(OperationObject $OperationObject, string $path): array
    {
        $parameters      = [];
        $queryParameters = [];

        $pathParameters = $this->parsePathParameters($path);
        if ($pathParameters) {
            foreach ((array)$pathParameters[1] as $parameter) {
                $ParameterGenerator = new ParameterGenerator($parameter);
                if ('namespace' == $parameter) {
                    $ParameterGenerator->setDefaultValue('default');
                }

                $parameters[] = $ParameterGenerator;
            }
        }

        $operationParameters = $OperationObject->parameters;
        foreach ((array)$operationParameters as $Parameter) {
            if ('body' == $Parameter->in) {
                if ($Parameter->schema) {
                    $parameters[] =
                        new ParameterGenerator('Model'
                            , '\\Kubernetes\\Model\\' . Utility::convertRefToClass($Parameter->schema->_ref)
                        );
                }
            } else {
                $queryParameters[] = $Parameter;
            }
        }

        if (1 <= count($queryParameters)) {
            $parameters[] = new ParameterGenerator('queries', 'array', []);
        }

        return [$parameters, $queryParameters];
    }

    protected function parsePathParameters(string $path)
    {
        $hasPathParameters = preg_match_all('/\{([a-z]*)\}/', $path, $pathParameters);
        if ($hasPathParameters) {
            return $pathParameters;
        } else {
            return $hasPathParameters;
        }


    }

}