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


class CronJobSpec extends AbstractModel
{
    /**
     * @var string
     */
    public $concurrencyPolicy;

    /**
     * @var integer
     */
    public $failedJobsHistoryLimit;

    /**
     * @var JobTemplateSpec
     */
    public $jobTemplate;

    /**
     * @var string
     */
    public $schedule;

    /**
     * @var integer
     */
    public $startingDeadlineSeconds;

    /**
     * @var integer
     */
    public $successfulJobsHistoryLimit;

    /**
     * @var boolean
     */
    public $suspend;

    /**
     * @param JobTemplateSpec $jobTemplate
     *
     * @return self
     */
    public function setJobTemplate($jobTemplate)
    {
        $this->jobTemplate = $this->_createPropertyValue($jobTemplate, JobTemplateSpec::class, false);

        return $this;
    }

}