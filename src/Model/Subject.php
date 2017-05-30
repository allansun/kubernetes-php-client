<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


class Subject extends AbstractModel
{
    /**
     * @var string
     * APIGroup holds the API group of the referenced subject. Defaults to "" for ServiceAccount subjects. Defaults to
     * "rbac.authorization.k8s.io" for User and Group subjects.
     */
    public $apiGroup;

    /**
     * @var string
     * Kind of object being referenced. Values defined by this API group are "User", "Group", and "ServiceAccount". If
     * the Authorizer does not recognized the kind value, the Authorizer should report an error.
     */
    public $kind;

    /**
     * @var string
     * Name of the object being referenced.
     */
    public $name;

    /**
     * @var string
     * Namespace of the referenced object. If the object kind is non-namespace, such as "User" or "Group", and this
     * value is not empty the Authorizer should report an error.
     */
    public $namespace;

}