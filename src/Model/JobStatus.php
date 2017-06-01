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


class JobStatus extends AbstractModel
{
    /**
     * @var integer
     * Active is the number of actively running pods.
     */
    public $active;

    /**
     * @var string
     * CompletionTime represents time when the job was completed. It is not guaranteed to be set in happens-before
     * order across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public $completionTime;

    /**
     * @var JobCondition[]
     * Conditions represent the latest available observations of an object's current state. More info:
     * http://kubernetes.io/docs/user-guide/jobs
     */
    public $conditions;

    /**
     * @var integer
     * Failed is the number of pods which reached Phase Failed.
     */
    public $failed;

    /**
     * @var string
     * StartTime represents time when the job was acknowledged by the Job Manager. It is not guaranteed to be set in
     * happens-before order across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public $startTime;

    /**
     * @var integer
     * Succeeded is the number of pods which reached Phase Succeeded.
     */
    public $succeeded;

    /**
     * @param JobCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, JobCondition::class, true);

        return $this;
    }
}