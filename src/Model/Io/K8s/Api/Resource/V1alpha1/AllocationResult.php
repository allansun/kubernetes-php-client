<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * AllocationResult contains attributed of an allocated resource.
 */
class AllocationResult extends AbstractModel
{
    /**
     * This field will get set by the resource driver after it has allocated the
     * resource driver to inform the scheduler where it can schedule Pods using the
     * ResourceClaim.
     *
     * Setting this field is optional. If null, the resource is available everywhere.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeSelector
     */
    public $availableOnNodes = null;

    /**
     * ResourceHandle contains arbitrary data returned by the driver after a successful
     * allocation. This is opaque for Kubernetes. Driver documentation may explain to
     * users how to interpret this data if needed.
     *
     * The maximum size of this field is 16KiB. This may get increased in the future,
     * but not reduced.
     *
     * @var string
     */
    public $resourceHandle = null;

    /**
     * Shareable determines whether the resource supports more than one consumer at a
     * time.
     *
     * @var boolean
     */
    public $shareable = null;
}

