<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * UserSubject holds detailed information for user-kind subject.
 */
class UserSubject extends AbstractModel
{
    /**
     * `name` is the username that matches, or "*" to match all usernames. Required.
     *
     * @var string
     */
    public $name = null;
}

