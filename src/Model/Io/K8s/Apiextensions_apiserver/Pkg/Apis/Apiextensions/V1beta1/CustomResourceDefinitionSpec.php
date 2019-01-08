<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec extends \Kubernetes\AbstractModel
{

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to
     * the name. Defaults to a created-at column. Optional, the global columns for all
     * versions. Top-level and per-version columns are mutually exclusive.
     *
     * @var CustomResourceColumnDefinition[]
     */
    public $additionalPrinterColumns = null;

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
     * Scope indicates whether this resource is cluster or namespace scoped.  Default
     * is namespaced
     *
     * @var string
     */
    public $scope = null;

    /**
     * Subresources describes the subresources for CustomResource Optional, the global
     * subresources for all versions. Top-level and per-version subresources are
     * mutually exclusive.
     *
     * @var CustomResourceSubresources
     */
    public $subresources = null;

    /**
     * Validation describes the validation methods for CustomResources Optional, the
     * global validation schema for all versions. Top-level and per-version schemas are
     * mutually exclusive.
     *
     * @var CustomResourceValidation
     */
    public $validation = null;

    /**
     * Version is the version this resource belongs in Should be always first item in
     * Versions field if provided. Optional, but at least one of Version or Versions
     * must be set. Deprecated: Please use `Versions`.
     *
     * @var string
     */
    public $version = null;

    /**
     * Versions is the list of all supported versions for this resource. If Version
     * field is provided, this field is optional. Validation: All versions must use the
     * same validation schema for now. i.e., top level Validation field is applied to
     * all of these versions. Order: The version name will be used to compute the
     * order. If the version string is "kube-like", it will sort above non "kube-like"
     * version strings, which are ordered lexicographically. "Kube-like" versions start
     * with a "v", then are followed by a number (the major version), then optionally
     * the string "alpha" or "beta" and another number (the minor version). These are
     * sorted first by GA > beta > alpha (where GA is a version with no suffix such as
     * beta or alpha), and then by comparing major version, then minor version. An
     * example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1,
     * v12alpha1, v11alpha2, foo1, foo10.
     *
     * @var CustomResourceDefinitionVersion[]
     */
    public $versions = null;


}

