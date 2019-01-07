<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

/**
 * ResourceRule is the list of actions the subject is allowed to perform on
 * resources. The list ordering isn't significant, may contain duplicates, and
 * possibly be incomplete.
 */
class ResourceRule extends \Kubernetes\AbstractModel
{

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple
     * API groups are specified, any action requested against one of the enumerated
     * resources in any API group will be allowed.  "*" means all.
     *
     * @var string[]
     */
    public $apiGroups = null;

    /**
     * ResourceNames is an optional white list of names that the rule applies to.  An
     * empty set means that everything is allowed.  "*" means all.
     *
     * @var string[]
     */
    public $resourceNames = null;

    /**
     * Resources is a list of resources this rule applies to.  "*" means all in the
     * specified apiGroups.
     *  "*\/foo" represents the subresource 'foo' for all resources in the specified
     * apiGroups.
     *
     * @var string[]
     */
    public $resources = null;

    /**
     * Verb is a list of kubernetes resource API verbs, like: get, list, watch, create,
     * update, delete, proxy.  "*" means all.
     *
     * @var string[]
     */
    public $verbs = null;


}

