<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ResourceFieldSelector represents container resources (cpu, memory) and their
 * output format
 */
class ResourceFieldSelector extends \Kubernetes\AbstractModel
{

    /**
     * Container name: required for volumes, optional for env vars
     *
     * @var string
     */
    public $containerName = null;

    /**
     * Specifies the output format of the exposed resources, defaults to "1"
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $divisor = null;

    /**
     * Required: resource to select
     *
     * @var string
     */
    public $resource = null;


}

