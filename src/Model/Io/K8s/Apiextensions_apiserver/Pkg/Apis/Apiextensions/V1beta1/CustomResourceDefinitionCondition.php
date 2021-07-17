<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceDefinitionCondition contains details for the current condition of
 * this pod.
 */
class CustomResourceDefinitionCondition extends AbstractModel
{

    /**
     * lastTransitionTime last time the condition transitioned from one status to
     * another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * message is a human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * reason is a unique, one-word, CamelCase reason for the condition's last
     * transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * status is the status of the condition. Can be True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * type is the type of the condition. Types include Established, NamesAccepted and
     * Terminating.
     *
     * @var string
     */
    public $type = null;


}

