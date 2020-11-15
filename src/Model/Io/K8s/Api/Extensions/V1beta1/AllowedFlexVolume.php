<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * AllowedFlexVolume represents a single Flexvolume that is allowed to be used.
 * Deprecated: use AllowedFlexVolume from policy API Group instead.
 */
class AllowedFlexVolume extends AbstractModel
{

    /**
     * driver is the name of the Flexvolume driver.
     *
     * @var string
     */
    public $driver = null;


}

