<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

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
     * label query over pods that should match the replicas count. More info:
     * http://kubernetes.io/docs/user-guide/labels#label-selectors
     *
     * @var object
     */
    public $selector = null;

    /**
     * label selector for pods that should match the replicas count. This is a
     * serializated version of both map-based and more expressive set-based selectors.
     * This is done to avoid introspection in the clients. The string will be in the
     * same format as the query-param syntax. If the target type only supports
     * map-based selectors, both this field and map-based selector field are populated.
     * More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @var string
     */
    public $targetSelector = null;


}

