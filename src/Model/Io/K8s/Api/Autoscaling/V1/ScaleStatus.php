<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V1;

/**
 * ScaleStatus represents the current status of a scale subresource.
 */
class ScaleStatus extends \Kubernetes\AbstractModel
{

    /**
     * actual number of observed instances of the scaled object.
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * label query over pods that should match the replicas count. This is same as the
     * label selector but in the string format to avoid introspection by clients. The
     * string will be in the same format as the query-param syntax. More info about
     * label selectors: http://kubernetes.io/docs/user-guide/labels#label-selectors
     *
     * @var string
     */
    public $selector = null;


}

