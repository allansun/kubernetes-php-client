<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ForZone provides information about which zones should consume this endpoint.
 */
class ForZone extends AbstractModel
{
    /**
     * name represents the name of the zone.
     *
     * @var string
     */
    public $name = null;
}

