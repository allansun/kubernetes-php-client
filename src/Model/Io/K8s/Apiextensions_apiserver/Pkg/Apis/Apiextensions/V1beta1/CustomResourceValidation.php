<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceValidation is a list of validation methods for CustomResources.
 */
class CustomResourceValidation extends AbstractModel
{

    /**
     * OpenAPIV3Schema is the OpenAPI v3 schema to be validated against.
     *
     * @var JSONSchemaProps
     */
    public $openAPIV3Schema = null;


}

