<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


class PodStatus extends AbstractModel
{
    /**
     * @var PodCondition[]
     * Current service state of pod. More info: http://kubernetes.io/docs/user-guide/pod-states#pod-conditions
     */
    public $conditions;

    /**
     * @var ContainerStatus[]
     * The list has one entry per container in the manifest. Each entry is currently the output of docker inspect. More
     * info: http://kubernetes.io/docs/user-guide/pod-states#container-statuses
     */
    public $containerStatuses;

    /**
     * @var string
     * IP address of the host to which the pod is assigned. Empty if not yet scheduled.
     */
    public $hostIP;

    /**
     * @var ContainerStatus[]
     * The list has one entry per init container in the manifest. The most recent successful init container will have
     * ready = true, the most recently started container will have startTime set. More info:
     * http://kubernetes.io/docs/user-guide/pod-states#container-statuses
     */
    public $initContainerStatuses;

    /**
     * @var string
     * A human readable message indicating details about why the pod is in this condition.
     */
    public $message;

    /**
     * @var string
     * Current condition of the pod. More info: http://kubernetes.io/docs/user-guide/pod-states#pod-phase
     */
    public $phase;

    /**
     * @var string
     * IP address allocated to the pod. Routable at least within the cluster. Empty if not yet allocated.
     */
    public $podIP;

    /**
     * @var string
     * The Quality of Service (QOS) classification assigned to the pod based on resource requirements See PodQOSClass
     * type for available QOS classes More info:
     * https://github.com/kubernetes/kubernetes/blob/master/docs/design/resource-qos.md
     */
    public $qosClass;

    /**
     * @var string
     * A brief CamelCase message indicating details about why the pod is in this state. e.g. 'OutOfDisk'
     */
    public $reason;

    /**
     * @var \DateTime
     * RFC 3339 date and time at which the object was acknowledged by the Kubelet. This is before the Kubelet pulled
     * the container image(s) for the pod.
     */
    public $startTime;

    /**
     * @param PodCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, PodCondition::class, true);

        return $this;
    }

    /**
     * @param ContainerStatus[] $containerStatuses
     *
     * @return self
     */
    public function setContainerStatuses($containerStatuses)
    {
        $this->containerStatuses = $this->_createPropertyValue($containerStatuses, ContainerStatus::class, true);

        return $this;
    }

    /**
     * @param ContainerStatus[] $initContainerStatuses
     *
     * @return self
     */
    public function setInitContainerStatuses($initContainerStatuses)
    {
        $this->initContainerStatuses =
            $this->_createPropertyValue($initContainerStatuses, ContainerStatus::class, true);

        return $this;
    }


}