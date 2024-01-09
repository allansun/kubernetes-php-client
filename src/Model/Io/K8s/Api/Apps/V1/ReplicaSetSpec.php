<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ReplicaSetSpec is the specification of a ReplicaSet.
 */
class ReplicaSetSpec extends AbstractModel
{
    /**
     * Minimum number of seconds for which a newly created pod should be ready without
     * any of its container crashing, for it to be considered available. Defaults to 0
     * (pod will be considered available as soon as it is ready)
     *
     * @var integer
     */
    public $minReadySeconds = null;

    /**
     * Replicas is the number of desired replicas. This is a pointer to distinguish
     * between explicit zero and unspecified. Defaults to 1. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller/#what-is-a-replicationcontroller
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * Selector is a label query over pods that should match the replica count. Label
     * keys and values that must match in order to be controlled by this replica set.
     * It must match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * Template is the object that describes the pod that will be created if
     * insufficient replicas are detected. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec
     */
    public $template = null;
}

