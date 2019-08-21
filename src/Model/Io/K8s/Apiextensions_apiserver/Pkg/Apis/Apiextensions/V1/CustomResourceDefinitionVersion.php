<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion extends \KubernetesRuntime\AbstractModel
{

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to
     * the name. Defaults to a created-at column.
     *
     * @var CustomResourceColumnDefinition[]
     */
    public $additionalPrinterColumns = null;

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     *
     * @var string
     */
    public $name = null;

    /**
     * Schema describes the schema for CustomResource used in validation, pruning, and
     * defaulting.
     *
     * @var CustomResourceValidation
     */
    public $schema = null;

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @var boolean
     */
    public $served = null;

    /**
     * Storage flags the version as storage version. There must be exactly one flagged
     * as storage version.
     *
     * @var boolean
     */
    public $storage = null;

    /**
     * Subresources describes the subresources for CustomResource
     *
     * @var CustomResourceSubresources
     */
    public $subresources = null;


}

