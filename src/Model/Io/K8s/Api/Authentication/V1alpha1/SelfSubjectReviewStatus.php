<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * SelfSubjectReviewStatus is filled by the kube-apiserver and sent back to a user.
 */
class SelfSubjectReviewStatus extends AbstractModel
{
    /**
     * User attributes of the user making this request.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Authentication\V1\UserInfo
     */
    public $userInfo = null;
}

