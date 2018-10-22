<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

/**
 * DeploymentCondition describes the state of a deployment at a certain point.
 */
class DeploymentCondition extends \Kubernetes\AbstractModel
{

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * The last time this condition was updated.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastUpdateTime = null;

    /**
     * A human readable message indicating details about the transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * The reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * Type of deployment condition.
     *
     * @var string
     */
    public $type = null;


}

