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


class PolicyRule extends AbstractModel
{

    /**
     * @var string[]
     * APIGroups is the name of the APIGroup that contains the resources. If multiple API groups are specified, any
     * action requested against one of the enumerated resources in any API group will be allowed.
     */
    public $apiGroups;

    /**
     * @var string[]
     *  NonResourceURLs is a set of partial urls that a user should have access to. *s are allowed, but only as the
     *  full, final step in the path Since non-resource URLs are not namespaced, this field is only applicable for
     *  ClusterRoles referenced from a ClusterRoleBinding. Rules can either apply to API resources (such as "pods" or
     *  "secrets") or non-resource URL paths (such as "/api"), but not both.
     */
    public $nonResourceURLs;

    /**
     * @var string[]
     * ResourceNames is an optional white list of names that the rule applies to. An empty set means that everything is
     * allowed.
     */
    public $resourceNames;

    /**
     * @var string[]
     * Resources is a list of resources this rule applies to. ResourceAll represents all resources.
     */
    public $resources;

    /**
     * @var string[]
     * Verbs is a list of Verbs that apply to ALL the ResourceKinds and AttributeRestrictions contained in this rule.
     * VerbAll represents all kinds.
     */
    public $verbs;
}