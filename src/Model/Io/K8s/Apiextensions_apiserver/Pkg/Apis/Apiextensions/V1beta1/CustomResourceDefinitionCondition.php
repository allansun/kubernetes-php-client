<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionCondition contains details for the current condition of
 * this pod.
 */
class CustomResourceDefinitionCondition extends \Kubernetes\AbstractModel
{

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * Human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status is the status of the condition. Can be True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * Type is the type of the condition.
     *
     * @var string
     */
    public $type = null;


}

