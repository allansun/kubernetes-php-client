<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * JobSpec describes how the job execution will look like.
 */
class JobSpec extends AbstractModel
{
    /**
     * Specifies the duration in seconds relative to the startTime that the job may be
     * continuously active before the system tries to terminate it; value must be
     * positive integer. If a Job is suspended (at creation or through an update), this
     * timer will effectively be stopped and reset when the Job is resumed again.
     *
     * @var integer
     */
    public $activeDeadlineSeconds = null;

    /**
     * Specifies the number of retries before marking this job failed. Defaults to 6
     *
     * @var integer
     */
    public $backoffLimit = null;

    /**
     * CompletionMode specifies how Pod completions are tracked. It can be `NonIndexed`
     * (default) or `Indexed`.
     *
     * `NonIndexed` means that the Job is considered complete when there have been
     * .spec.completions successfully completed Pods. Each Pod completion is homologous
     * to each other.
     *
     * `Indexed` means that the Pods of a Job get an associated completion index from 0
     * to (.spec.completions - 1), available in the annotation
     * batch.kubernetes.io/job-completion-index. The Job is considered complete when
     * there is one successfully completed Pod for each index. When value is `Indexed`,
     * .spec.completions must be specified and `.spec.parallelism` must be less than or
     * equal to 10^5. In addition, The Pod name takes the form
     * `$(job-name)-$(index)-$(random-string)`, the Pod hostname takes the form
     * `$(job-name)-$(index)`.
     *
     * More completion modes can be added in the future. If the Job controller observes
     * a mode that it doesn't recognize, which is possible during upgrades due to
     * version skew, the controller skips updates for the Job.
     *
     * @var string
     */
    public $completionMode = null;

    /**
     * Specifies the desired number of successfully finished pods the job should be run
     * with.  Setting to nil means that the success of any pod signals the success of
     * all pods, and allows parallelism to have any positive value.  Setting to 1 means
     * that parallelism is limited to 1 and the success of that pod signals the success
     * of the job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @var integer
     */
    public $completions = null;

    /**
     * manualSelector controls generation of pod labels and pod selectors. Leave
     * `manualSelector` unset unless you are certain what you are doing. When false or
     * unset, the system pick labels unique to this job and appends those labels to the
     * pod template.  When true, the user is responsible for picking unique labels and
     * specifying the selector.  Failure to pick a unique label may cause this and
     * other jobs to not function correctly.  However, You may see
     * `manualSelector=true` in jobs that were created with the old
     * `extensions/v1beta1` API. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/#specifying-your-own-pod-selector
     *
     * @var boolean
     */
    public $manualSelector = null;

    /**
     * Specifies the maximum desired number of pods the job should run at any given
     * time. The actual number of pods running in steady state will be less than this
     * number when ((.spec.completions - .status.successful) < .spec.parallelism), i.e.
     * when the work left to do is less than max parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @var integer
     */
    public $parallelism = null;

    /**
     * Specifies the policy of handling failed pods. In particular, it allows to
     * specify the set of actions and conditions which need to be satisfied to take the
     * associated action. If empty, the default behaviour applies - the counter of
     * failed pods, represented by the jobs's .status.failed field, is incremented and
     * it is checked against the backoffLimit. This field cannot be used in combination
     * with restartPolicy=OnFailure.
     *
     * This field is beta-level. It can be used when the `JobPodFailurePolicy` feature
     * gate is enabled (enabled by default).
     *
     * @var PodFailurePolicy
     */
    public $podFailurePolicy = null;

    /**
     * A label query over pods that should match the pod count. Normally, the system
     * sets this field for you. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * Suspend specifies whether the Job controller should create Pods or not. If a Job
     * is created with suspend set to true, no Pods are created by the Job controller.
     * If a Job is suspended after creation (i.e. the flag goes from false to true),
     * the Job controller will delete all active Pods associated with this Job. Users
     * must design their workload to gracefully handle this. Suspending a Job will
     * reset the StartTime field of the Job, effectively resetting the
     * ActiveDeadlineSeconds timer too. Defaults to false.
     *
     * @var boolean
     */
    public $suspend = null;

    /**
     * Describes the pod that will be created when executing a job. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec
     */
    public $template = null;

    /**
     * ttlSecondsAfterFinished limits the lifetime of a Job that has finished execution
     * (either Complete or Failed). If this field is set, ttlSecondsAfterFinished after
     * the Job finishes, it is eligible to be automatically deleted. When the Job is
     * being deleted, its lifecycle guarantees (e.g. finalizers) will be honored. If
     * this field is unset, the Job won't be automatically deleted. If this field is
     * set to zero, the Job becomes eligible to be deleted immediately after it
     * finishes.
     *
     * @var integer
     */
    public $ttlSecondsAfterFinished = null;
}

