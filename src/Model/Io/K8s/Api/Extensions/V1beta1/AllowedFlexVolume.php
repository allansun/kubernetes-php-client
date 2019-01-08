<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * AllowedFlexVolume represents a single Flexvolume that is allowed to be used.
 * Deprecated: use AllowedFlexVolume from policy API Group instead.
 */
class AllowedFlexVolume extends \Kubernetes\AbstractModel
{

    /**
     * driver is the name of the Flexvolume driver.
     *
     * @var string
     */
    public $driver = null;


}

