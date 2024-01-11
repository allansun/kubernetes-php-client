<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointHints provides hints describing how an endpoint should be consumed.
 */
class EndpointHints extends AbstractModel
{
    /**
     * forZones indicates the zone(s) this endpoint should be consumed by to enable
     * topology aware routing.
     *
     * @var ForZone[]
     */
    public $forZones = null;
}

