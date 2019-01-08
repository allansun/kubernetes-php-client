<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * ID Range provides a min/max of an allowed range of IDs.
 */
class IDRange extends \Kubernetes\AbstractModel
{

    /**
     * Max is the end of the range, inclusive.
     *
     * @var integer
     */
    public $max = null;

    /**
     * Min is the start of the range, inclusive.
     *
     * @var integer
     */
    public $min = null;


}

