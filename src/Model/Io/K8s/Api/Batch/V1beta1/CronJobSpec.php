<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1beta1;

/**
 * CronJobSpec describes how the job execution will look like and when it will
 * actually run.
 */
class CronJobSpec extends \Kubernetes\AbstractModel
{

    /**
     * Specifies how to treat concurrent executions of a Job. Valid values are: -
     * "Allow" (default): allows CronJobs to run concurrently; - "Forbid": forbids
     * concurrent runs, skipping next run if previous run hasn't finished yet; -
     * "Replace": cancels currently running job and replaces it with a new one
     *
     * @var string
     */
    public $concurrencyPolicy = null;

    /**
     * The number of failed finished jobs to retain. This is a pointer to distinguish
     * between explicit zero and not specified. Defaults to 1.
     *
     * @var integer
     */
    public $failedJobsHistoryLimit = null;

    /**
     * Specifies the job that will be created when executing a CronJob.
     *
     * @var JobTemplateSpec
     */
    public $jobTemplate = null;

    /**
     * The schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     *
     * @var string
     */
    public $schedule = null;

    /**
     * Optional deadline in seconds for starting the job if it misses scheduled time
     * for any reason.  Missed jobs executions will be counted as failed ones.
     *
     * @var integer
     */
    public $startingDeadlineSeconds = null;

    /**
     * The number of successful finished jobs to retain. This is a pointer to
     * distinguish between explicit zero and not specified. Defaults to 3.
     *
     * @var integer
     */
    public $successfulJobsHistoryLimit = null;

    /**
     * This flag tells the controller to suspend subsequent executions, it does not
     * apply to already started executions.  Defaults to false.
     *
     * @var boolean
     */
    public $suspend = null;


}

