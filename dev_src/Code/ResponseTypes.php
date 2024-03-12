<?php


namespace CodeGenerator\Code;

use CodeGenerator\Utility;
use Laminas\Code\Generator\ClassGenerator;
use OpenAPI\Schema\V2\Operation;
use OpenAPI\Schema\V2\Response;

class ResponseTypes extends AbstractClassFile
{
    protected $kubernetesNamespace = 'Kubernetes';

    public $responseTypes = [];

    public function __construct()
    {
        parent::__construct([]);

        $this->setNamespace($this->kubernetesNamespace);

        $this->ClassGenerator = new ClassGenerator();
        $this->ClassGenerator
            ->setNamespaceName($this->kubernetesNamespace)
            ->setName('ResponseTypes');

        $this->setClass($this->ClassGenerator);

        $this->initFilename();
    }

    public function parseResponseTypes(Operation $OperationObject)
    {
        foreach ($OperationObject->responses->getPatternedFields() as $statusCode => $ResponseObject) {
            /** @var Response $ResponseObject */
            if ($ResponseObject->schema && $ResponseObject->schema->_ref) {
                $this->responseTypes[$OperationObject->operationId]["{$statusCode}."] =
                    '\\Kubernetes\\Model\\' . Utility::convertRefToClass($ResponseObject->schema->_ref);
            }
        }
    }

    public function write()
    {
        $this->ClassGenerator->addConstant('TYPES', $this->responseTypes);

        return parent::write();
    }
}
