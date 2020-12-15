<?php

namespace Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Describes the state of the storageVersion at a certain point.
 */
class StorageVersionCondition extends AbstractModel
{

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * A human readable message indicating details about the transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * If set, this represents the .metadata.generation that the condition was set
     * based upon.
     *
     * @var integer
     */
    public $observedGeneration = null;

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
     * Type of the condition.
     *
     * @var string
     */
    public $type = null;


}

