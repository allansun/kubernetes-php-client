<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec extends \Kubernetes\AbstractModel
{

    /**
     * Group is the group this resource belongs in
     *
     * @var string
     */
    public $group = null;

    /**
     * Names are the names used to describe this custom resource
     *
     * @var CustomResourceDefinitionNames
     */
    public $names = null;

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.  Default
     * is namespaced
     *
     * @var string
     */
    public $scope = null;

    /**
     * Validation describes the validation methods for CustomResources
     *
     * @var CustomResourceValidation
     */
    public $validation = null;

    /**
     * Version is the version this resource belongs in
     *
     * @var string
     */
    public $version = null;


}

