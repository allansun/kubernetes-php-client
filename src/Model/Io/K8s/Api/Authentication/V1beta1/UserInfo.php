<?php

namespace Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * UserInfo holds the information about the user needed to implement the user.Info
 * interface.
 */
class UserInfo extends AbstractModel
{

    /**
     * Any additional information provided by the authenticator.
     *
     * @var object
     */
    public $extra = null;

    /**
     * The names of groups this user is a part of.
     *
     * @var string[]
     */
    public $groups = null;

    /**
     * A unique value that identifies this user across time. If this user is deleted
     * and another user by the same name is added, they will have different UIDs.
     *
     * @var string
     */
    public $uid = null;

    /**
     * The name that uniquely identifies this user among all active users.
     *
     * @var string
     */
    public $username = null;


}

