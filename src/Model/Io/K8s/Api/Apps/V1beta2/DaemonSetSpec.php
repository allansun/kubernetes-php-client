<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

/**
 * DaemonSetSpec is the specification of a daemon set.
 */
class DaemonSetSpec extends \Kubernetes\AbstractModel
{

    /**
     * The minimum number of seconds for which a newly created DaemonSet pod should be
     * ready without any of its container crashing, for it to be considered available.
     * Defaults to 0 (pod will be considered available as soon as it is ready).
     *
     * @var integer
     */
    public $minReadySeconds = null;

    /**
     * The number of old history to retain to allow rollback. This is a pointer to
     * distinguish between explicit zero and not specified. Defaults to 10.
     *
     * @var integer
     */
    public $revisionHistoryLimit = null;

    /**
     * A label query over pods that are managed by the daemon set. Must match in order
     * to be controlled. It must match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * An object that describes the pod that will be created. The DaemonSet will create
     * exactly one copy of this pod on every node that matches the template's node
     * selector (or on every node if no node selector is specified). More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/replicationcontroller#pod-template
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec
     */
    public $template = null;

    /**
     * An update strategy to replace existing DaemonSet pods with new pods.
     *
     * @var DaemonSetUpdateStrategy
     */
    public $updateStrategy = null;


}

