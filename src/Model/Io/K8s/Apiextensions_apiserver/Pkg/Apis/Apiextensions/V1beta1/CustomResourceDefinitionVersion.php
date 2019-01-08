<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion extends \Kubernetes\AbstractModel
{

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to
     * the name. Defaults to a created-at column. Top-level and per-version columns are
     * mutually exclusive. Per-version columns must not all be set to identical values
     * (top-level columns should be used instead) This field is alpha-level and is only
     * honored by servers that enable the CustomResourceWebhookConversion feature.
     * NOTE: CRDs created prior to 1.13 populated the top-level
     * additionalPrinterColumns field by default. To apply an update that changes to
     * per-version additionalPrinterColumns, the top-level additionalPrinterColumns
     * field must be explicitly set to null
     *
     * @var CustomResourceColumnDefinition[]
     */
    public $additionalPrinterColumns = null;

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     *
     * @var string
     */
    public $name = null;

    /**
     * Schema describes the schema for CustomResource used in validation, pruning, and
     * defaulting. Top-level and per-version schemas are mutually exclusive.
     * Per-version schemas must not all be set to identical values (top-level
     * validation schema should be used instead) This field is alpha-level and is only
     * honored by servers that enable the CustomResourceWebhookConversion feature.
     *
     * @var CustomResourceValidation
     */
    public $schema = null;

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @var boolean
     */
    public $served = null;

    /**
     * Storage flags the version as storage version. There must be exactly one flagged
     * as storage version.
     *
     * @var boolean
     */
    public $storage = null;

    /**
     * Subresources describes the subresources for CustomResource Top-level and
     * per-version subresources are mutually exclusive. Per-version subresources must
     * not all be set to identical values (top-level subresources should be used
     * instead) This field is alpha-level and is only honored by servers that enable
     * the CustomResourceWebhookConversion feature.
     *
     * @var CustomResourceSubresources
     */
    public $subresources = null;


}

