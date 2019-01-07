<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * describes the attributes of a scale subresource
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

