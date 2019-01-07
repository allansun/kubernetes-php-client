<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V2alpha1;

/**
 * CronJobStatus represents the current state of a cron job.
 */
class CronJobStatus extends \Kubernetes\AbstractModel
{

    /**
     * A list of pointers to currently running jobs.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference[]
     */
    public $active = null;

    /**
     * Information when was the last time the job was successfully scheduled.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastScheduleTime = null;


}

