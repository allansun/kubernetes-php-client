<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeNodeAffinity defines constraints that limit what nodes this volume can be
 * accessed from.
 */
class VolumeNodeAffinity extends AbstractModel
{

    /**
     * required specifies hard node constraints that must be met.
     *
     * @var NodeSelector
     */
    public $required = null;


}

