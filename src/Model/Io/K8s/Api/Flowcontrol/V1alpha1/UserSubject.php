<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * UserSubject holds detailed information for user-kind subject.
 */
class UserSubject extends \KubernetesRuntime\AbstractModel
{

    /**
     * `name` is the username that matches, or "*" to match all usernames. Required.
     *
     * @var string
     */
    public $name = null;


}

