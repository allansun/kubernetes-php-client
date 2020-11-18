<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * GroupSubject holds detailed information for group-kind subject.
 */
class GroupSubject extends AbstractModel
{

    /**
     * name is the user group that matches, or "*" to match all user groups. See
     * https://github.com/kubernetes/apiserver/blob/master/pkg/authentication/user/user.go
     * for some well-known group names. Required.
     *
     * @var string
     */
    public $name = null;


}

