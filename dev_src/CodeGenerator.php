<?php


namespace CodeGenerator;

use CodeGenerator\Code\API;
use CodeGenerator\Code\KubernetesExtentions;
use CodeGenerator\Code\KubernetesOperations;
use CodeGenerator\Code\Model;
use CodeGenerator\Code\ResponseTypes;
use KubernetesRuntime\Logger;
use OpenAPI\Schema\V2 as Schema;

class CodeGenerator
{
    /**
     * @var
     * Schema\SwaggerObject
     */
    private $Swagger;

    public function __construct(Schema\SwaggerObject $Swagger)
    {
        $this->Swagger = $Swagger;
    }

    /**
     * @param Schema\SchemaObject[] $definitions
     *
     * @throws \Exception
     */
    public function generateDefinitions($definitions)
    {
        foreach ($definitions as $name => $SchemaObject) {
            $Model = new Model($name, $SchemaObject);
            Logger::getInstance()->debug($Model->getFilename());
            $Model->write();
        }
    }

    /**
     * @param Schema\PathItemObject[] $pathItems
     */
    public function generateApis($pathItems)
    {
        /** @var Api[] $apiClassGenerators */
        $apiClassGenerators = [];
        $ungroupedApis      = [];

        foreach ($pathItems as $path => $PathItemObject) {
            $pathParameters = $PathItemObject->parameters;

            foreach (KubernetesOperations::OPERATIONS as $operation) {
                $OperationObject = $PathItemObject->$operation;
                if ($OperationObject instanceof Schema\OperationObject) {
                    /** @var Schema\OperationObject $OperationObject */
                    if (key_exists(KubernetesExtentions::ACTION, $OperationObject->getPatternedFields())
                        && key_exists(KubernetesExtentions::GROUP_VERSION_KIND, $OperationObject->getPatternedFields())
                    ) {
                        $apiKind = $OperationObject->getPatternedFields()
                                   [KubernetesExtentions::GROUP_VERSION_KIND][KubernetesExtentions::KIND];

                        if (array_key_exists($apiKind, $apiClassGenerators)) {
                            $API = $apiClassGenerators[$apiKind];
                        } else {
                            $API                          = new API($apiKind);
                            $apiClassGenerators[$apiKind] = $API;
                        }

                        $API->parseMethod($OperationObject, $path, $operation, $pathParameters);

                    } else {
                        $ungroupedApis[$path][$operation] = $OperationObject;
                    }
                }
            }
        }

        foreach ($apiClassGenerators as $ApiClassGenerator) {
            Logger::getInstance()->debug($ApiClassGenerator->getFilename());
            $ApiClassGenerator->write();
        }
    }

    /**
     * @param Schema\PathItemObject[] $pathItems
     */
    public function generateResponseTypes($pathItems)
    {
        $ResponseTypes = new ResponseTypes();
        foreach ($pathItems as $path => $PathItemObject) {
            foreach (KubernetesOperations::OPERATIONS as $operation) {
                $OperationObject = $PathItemObject->$operation;
                if ($OperationObject instanceof Schema\OperationObject) {
                    $ResponseTypes->parseReseponseTypes($OperationObject);
                }
            }
        }

        $ResponseTypes->write();
    }
}