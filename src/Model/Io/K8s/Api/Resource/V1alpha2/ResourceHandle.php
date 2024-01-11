<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceHandle holds opaque resource data for processing by a specific kubelet
 * plugin.
 */
class ResourceHandle extends AbstractModel
{
    /**
     * Data contains the opaque data associated with this ResourceHandle. It is set by
     * the controller component of the resource driver whose name matches the
     * DriverName set in the ResourceClaimStatus this ResourceHandle is embedded in. It
     * is set at allocation time and is intended for processing by the kubelet plugin
     * whose name matches the DriverName set in this ResourceHandle.
     *
     * The maximum size of this field is 16KiB. This may get increased in the future,
     * but not reduced.
     *
     * @var string
     */
    public $data = null;

    /**
     * DriverName specifies the name of the resource driver whose kubelet plugin should
     * be invoked to process this ResourceHandle's data once it lands on a node. This
     * may differ from the DriverName set in ResourceClaimStatus this ResourceHandle is
     * embedded in.
     *
     * @var string
     */
    public $driverName = null;
}

