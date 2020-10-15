<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourcePolicyRule is a predicate that matches some resource requests, testing
 * the request's verb and the target resource. A ResourcePolicyRule matches a
 * resource request if and only if: (a) at least one member of verbs matches the
 * request, (b) at least one member of apiGroups matches the request, (c) at least
 * one member of resources matches the request, and (d) least one member of
 * namespaces matches the request.
 */
class ResourcePolicyRule extends AbstractModel
{

    /**
     * `apiGroups` is a list of matching API groups and may not be empty. "*" matches
     * all API groups and, if present, must be the only entry. Required.
     *
     * @var string[]
     */
    public $apiGroups = null;

    /**
     * `clusterScope` indicates whether to match requests that do not specify a
     * namespace (which happens either because the resource is not namespaced or the
     * request targets all namespaces). If this field is omitted or false then the
     * `namespaces` field must contain a non-empty list.
     *
     * @var boolean
     */
    public $clusterScope = null;

    /**
     * `namespaces` is a list of target namespaces that restricts matches.  A request
     * that specifies a target namespace matches only if either (a) this list contains
     * that target namespace or (b) this list contains "*".  Note that "*" matches any
     * specified namespace but does not match a request that _does not specify_ a
     * namespace (see the `clusterScope` field for that). This list may be empty, but
     * only if `clusterScope` is true.
     *
     * @var string[]
     */
    public $namespaces = null;

    /**
     * `resources` is a list of matching resources (i.e., lowercase and plural) with,
     * if desired, subresource.  For example, [ "services", "nodes/status" ].  This
     * list may not be empty. "*" matches all resources and, if present, must be the
     * only entry. Required.
     *
     * @var string[]
     */
    public $resources = null;

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs
     * and, if present, must be the only entry. Required.
     *
     * @var string[]
     */
    public $verbs = null;


}

