<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V1;

/**
 * ScaleSpec describes the attributes of a scale subresource.
 */
class ScaleSpec extends \Kubernetes\AbstractModel
{

    /**
     * desired number of instances for the scaled object.
     *
     * @var integer
     */
    public $replicas = null;


}

