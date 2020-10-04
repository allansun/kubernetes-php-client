<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * AllowedFlexVolume represents a single Flexvolume that is allowed to be used.
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

