<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

/**
 * CustomResourceValidation is a list of validation methods for CustomResources.
 */
class CustomResourceValidation extends \KubernetesRuntime\AbstractModel
{

    /**
     * openAPIV3Schema is the OpenAPI v3 schema to use for validation and pruning.
     *
     * @var JSONSchemaProps
     */
    public $openAPIV3Schema = null;


}

