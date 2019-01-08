<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

class CustomResourceDefinitionVersion extends \Kubernetes\AbstractModel
{

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     *
     * @var string
     */
    public $name = null;

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


}

