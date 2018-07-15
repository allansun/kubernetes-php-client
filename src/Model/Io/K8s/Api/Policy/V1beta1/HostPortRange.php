<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * Host Port Range defines a range of host ports that will be enabled by a policy
 * for pods to use.  It requires both the start and end to be defined.
 */
class HostPortRange extends \Kubernetes\AbstractModel
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

