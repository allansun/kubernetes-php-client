<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * Subject matches the originator of a request, as identified by the request
 * authentication system. There are three ways of matching an originator; by user,
 * group, or service account.
 */
class Subject extends AbstractModel
{

    /**
     * `group` matches based on user group name.
     *
     * @var GroupSubject
     */
    public $group = null;

    /**
     * `kind` indicates which one of the other fields is non-empty. Required
     *
     * @var string
     */
    public $kind = null;

    /**
     * `serviceAccount` matches ServiceAccounts.
     *
     * @var ServiceAccountSubject
     */
    public $serviceAccount = null;

    /**
     * `user` matches based on username.
     *
     * @var UserSubject
     */
    public $user = null;


}

