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


class ResourceAttributes extends AbstractModel
{
    /**
     * @var string
     * Group is the API Group of the Resource. "*" means all.
     */
    public $group;

    /**
     * @var string
     * Name is the name of the resource being requested for a "get" or deleted for a "delete". "" (empty) means all.
     */
    public $name;

    /**
     * @var string
     * Namespace is the namespace of the action being requested. Currently, there is no distinction between no
     * namespace and all namespaces "" (empty) is defaulted for LocalSubjectAccessReviews "" (empty) is empty for
     * cluster-scoped resources "" (empty) means "all" for namespace scoped resources from a SubjectAccessReview or
     * SelfSubjectAccessReview
     */
    public $namespace;

    /**
     * @var string
     * Resource is one of the existing resource types. "*" means all.
     */
    public $resource;

    /**
     * @var string
     * Subresource is one of the existing resource types. "" means none.
     */
    public $subresource;

    /**
     * @var string
     * Verb is a kubernetes resource API verb, like: get, list, watch, create, update, delete, proxy. "*" means all.
     */
    public $verb;

    /**
     * @var string
     * Version is the API Version of the Resource. "*" means all.
     */
    public $version;
}