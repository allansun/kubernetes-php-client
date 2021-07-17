<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CSINodeSpec holds information about the specification of all CSI drivers
 * installed on a node
 */
class CSINodeSpec extends AbstractModel
{

    /**
     * drivers is a list of information of all CSI Drivers existing on a node. If all
     * drivers in the list are uninstalled, this can become empty.
     *
     * @var CSINodeDriver[]
     */
    public $drivers = null;


}

