<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodDNSConfigOption defines DNS resolver options of a pod.
 */
class PodDNSConfigOption extends \Kubernetes\AbstractModel
{

    /**
     * Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $value = null;


}

