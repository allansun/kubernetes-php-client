<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * AllowedCSIDriver represents a single inline CSI Driver that is allowed to be
 * used.
 */
class AllowedCSIDriver extends AbstractModel
{

    /**
     * Name is the registered name of the CSI driver
     *
     * @var string
     */
    public $name = null;


}

