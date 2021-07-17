<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * Subject contains a reference to the object or user identities a role binding
 * applies to.  This can either hold a direct API object reference, or a value for
 * non-objects such as user and group names.
 */
class Subject extends AbstractModel
{

    /**
     * APIGroup holds the API group of the referenced subject. Defaults to "" for
     * ServiceAccount subjects. Defaults to "rbac.authorization.k8s.io" for User and
     * Group subjects.
     *
     * @var string
     */
    public $apiGroup = null;

    /**
     * Kind of object being referenced. Values defined by this API group are "User",
     * "Group", and "ServiceAccount". If the Authorizer does not recognized the kind
     * value, the Authorizer should report an error.
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name of the object being referenced.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace of the referenced object.  If the object kind is non-namespace, such
     * as "User" or "Group", and this value is not empty the Authorizer should report
     * an error.
     *
     * @var string
     */
    public $namespace = null;


}

