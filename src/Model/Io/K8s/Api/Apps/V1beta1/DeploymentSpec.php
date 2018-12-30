<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * DeploymentSpec is the specification of the desired behavior of the Deployment.
 */
class DeploymentSpec extends \Kubernetes\AbstractModel
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
     * Indicates that the deployment is paused.
     *
     * @var boolean
     */
    public $paused = null;

    /**
     * The maximum time in seconds for a deployment to make progress before it is
     * considered to be failed. The deployment controller will continue to process
     * failed deployments and a condition with a ProgressDeadlineExceeded reason will
     * be surfaced in the deployment status. Note that progress will not be estimated
     * during the time a deployment is paused. Defaults to 600s.
     *
     * @var integer
     */
    public $progressDeadlineSeconds = null;

    /**
     * Number of desired pods. This is a pointer to distinguish between explicit zero
     * and not specified. Defaults to 1.
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * The number of old ReplicaSets to retain to allow rollback. This is a pointer to
     * distinguish between explicit zero and not specified. Defaults to 2.
     *
     * @var integer
     */
    public $revisionHistoryLimit = null;

    /**
     * DEPRECATED. The config this deployment is rolling back to. Will be cleared after
     * rollback is done.
     *
     * @var RollbackConfig
     */
    public $rollbackTo = null;

    /**
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this
     * will be the ones affected by this deployment.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * The deployment strategy to use to replace existing pods with new ones.
     *
     * @var DeploymentStrategy
     */
    public $strategy = null;

    /**
     * Template describes the pods that will be created.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec
     */
    public $template = null;


}

