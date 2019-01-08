<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

/**
 * JobStatus represents the current state of a Job.
 */
class JobStatus extends \Kubernetes\AbstractModel
{

    /**
     * The number of actively running pods.
     *
     * @var integer
     */
    public $active = null;

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in
     * happens-before order across separate operations. It is represented in RFC3339
     * form and is in UTC.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $completionTime = null;

    /**
     * The latest available observations of an object's current state. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @var JobCondition[]
     */
    public $conditions = null;

    /**
     * The number of pods which reached phase Failed.
     *
     * @var integer
     */
    public $failed = null;

    /**
     * Represents time when the job was acknowledged by the job controller. It is not
     * guaranteed to be set in happens-before order across separate operations. It is
     * represented in RFC3339 form and is in UTC.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $startTime = null;

    /**
     * The number of pods which reached phase Succeeded.
     *
     * @var integer
     */
    public $succeeded = null;


}

