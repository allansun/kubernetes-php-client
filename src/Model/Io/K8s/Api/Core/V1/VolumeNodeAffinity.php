<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * VolumeNodeAffinity defines constraints that limit what nodes this volume can be
 * accessed from.
 */
class VolumeNodeAffinity extends \Kubernetes\AbstractModel
{

    /**
     * Required specifies hard node constraints that must be met.
     *
     * @var NodeSelector
     */
    public $required = null;


}

