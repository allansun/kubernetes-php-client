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

class DeploymentSpec extends AbstractModel
{
    /**
     * @var integer
     * Minimum number of seconds for which a newly created pod should be ready without any of its container crashing,
     * for it to be considered available. Defaults to 0 (pod will be considered available as soon as it is ready)
     */
    public $minReadySeconds = 0;

    /**
     * @var boolean
     * Indicates that the deployment is paused.
     */
    public $paused;

    /**
     * @var int
     * The maximum time in seconds for a deployment to make progress before it is considered to be failed.
     * The deployment controller will continue to process failed deployments and a condition with a
     * ProgressDeadlineExceeded reason will be surfaced in the deployment status. Once autoRollback is implemented,
     * the deployment controller will automatically rollback failed deployments. Note that progress will not be
     * estimated during the time a deployment is paused. Defaults to 600s.
     */
    public $progressDeadlineSeconds = 600;

    /**
     * @var integer
     * Number of desired pods. This is a pointer to distinguish between explicit zero and not specified. Defaults to 1.
     */
    public $replicas = 1;

    /**
     * @var int
     * The number of old ReplicaSets to retain to allow rollback.
     * This is a pointer to distinguish between explicit zero and not specified. Defaults to 2.
     */
    public $revisionHistoryLimit = 2;

    /**
     * @var RollbackConfig
     * The config this deployment is rolling back to. Will be cleared after rollback is done.
     */
    public $rollbackTo;

    /**
     * @var LabelSelector
     * Label selector for pods. Existing ReplicaSets whose pods are selected by this will be the
     * ones affected by this deployment.
     */
    public $selector;

    /**
     * @var DeploymentStrategy
     * The deployment strategy to use to replace existing pods with new ones.
     */
    public $strategy;

    /**
     * @var PodTemplateSpec
     * Template describes the pods that will be created.
     */
    public $template;

    /**
     * @param RollbackConfig $rollbackTo
     *
     * @return $this
     */
    public function setRollbackTo($rollbackTo)
    {
        $this->rollbackTo = new RollbackConfig($rollbackTo);

        return $this;
    }

    /**
     * @param LabelSelector $selector
     *
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->selector = new LabelSelector($selector);

        return $this;
    }

    /**
     * @param DeploymentStrategy $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->strategy = new DeploymentStrategy($strategy);

        return $this;
    }

    /**
     * @param PodTemplateSpec $template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = new PodTemplateSpec($template);

        return $this;
    }

}