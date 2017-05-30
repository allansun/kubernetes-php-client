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


class ReplicaSetSpec extends AbstractModel
{
    /**
     * @var integer
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing,
     * for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     */
    public $minReadySeconds;

    /**
     * @var integer
     * Replicas is the number of desired replicas. This is a pointer to distinguish between explicit zero and
     * unspecified. Defaults to 1. More info:
     * http://kubernetes.io/docs/user-guide/replication-controller#what-is-a-replication-controller
     */
    public $replicas;

    /**
     * @var LabelSelector
     * Selector is a label query over pods that should match the replica count. If the selector is empty, it is
     * defaulted to the labels present on the pod template. Label keys and values that must match in order to be
     * controlled by this replica set. More info: http://kubernetes.io/docs/user-guide/labels#label-selectors
     */
    public $selector;

    /**
     * @var PodTemplateSpec
     * Template is the object that describes the pod that will be created if insufficient replicas are detected. More
     * info: http://kubernetes.io/docs/user-guide/replication-controller#pod-template
     */
    public $template;
}