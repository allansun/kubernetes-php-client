<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

/**
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * `conversion` defines conversion settings for the CRD.
     *
     * @var CustomResourceConversion
     */
    public $conversion = null;

    /**
     * Group is the group this resource belongs in
     *
     * @var string
     */
    public $group = null;

    /**
     * Names are the names used to describe this custom resource
     *
     * @var CustomResourceDefinitionNames
     */
    public $names = null;

    /**
     * preserveUnknownFields disables pruning of object fields which are not specified
     * in the OpenAPI schema. apiVersion, kind, metadata and known fields inside
     * metadata are always preserved. This field is deprecated in favor of setting
     * `x-preserve-unknown-fields` to true in
     * `spec.versions[*].schema.openAPIV3Schema`.
     *
     * @var boolean
     */
    public $preserveUnknownFields = null;

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.
     *
     * @var string
     */
    public $scope = null;

    /**
     * Versions is the list of all supported versions for this resource. Order: The
     * version name will be used to compute the order. If the version string is
     * "kube-like", it will sort above non "kube-like" version strings, which are
     * ordered lexicographically. "Kube-like" versions start with a "v", then are
     * followed by a number (the major version), then optionally the string "alpha" or
     * "beta" and another number (the minor version). These are sorted first by GA >
     * beta > alpha (where GA is a version with no suffix such as beta or alpha), and
     * then by comparing major version, then minor version. An example sorted list of
     * versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2, foo1,
     * foo10.
     *
     * @var CustomResourceDefinitionVersion[]
     */
    public $versions = null;


}

