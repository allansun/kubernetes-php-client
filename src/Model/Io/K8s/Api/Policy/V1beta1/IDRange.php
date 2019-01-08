<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * IDRange provides a min/max of an allowed range of IDs.
 */
class IDRange extends \Kubernetes\AbstractModel
{

    /**
     * max is the end of the range, inclusive.
     *
     * @var integer
     */
    public $max = null;

    /**
     * min is the start of the range, inclusive.
     *
     * @var integer
     */
    public $min = null;


}

