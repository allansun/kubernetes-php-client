<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion extends AbstractModel
{
    /**
     * additionalPrinterColumns specifies additional columns returned in Table output.
     * See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables
     * for details. If no columns are specified, a single column displaying the age of
     * the custom resource is used.
     *
     * @var CustomResourceColumnDefinition[]
     */
    public $additionalPrinterColumns = null;

    /**
     * deprecated indicates this version of the custom resource API is deprecated. When
     * set to true, API requests to this version receive a warning header in the server
     * response. Defaults to false.
     *
     * @var boolean
     */
    public $deprecated = null;

    /**
     * deprecationWarning overrides the default warning returned to API clients. May
     * only be set when `deprecated` is true. The default warning indicates this
     * version is deprecated and recommends use of the newest served version of equal
     * or greater stability, if one exists.
     *
     * @var string
     */
    public $deprecationWarning = null;

    /**
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom
     * resources are served under this version at `/apis/<group>/<version>/...` if
     * `served` is true.
     *
     * @var string
     */
    public $name = null;

    /**
     * schema describes the schema used for validation, pruning, and defaulting of this
     * version of the custom resource.
     *
     * @var CustomResourceValidation
     */
    public $schema = null;

    /**
     * served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @var boolean
     */
    public $served = null;

    /**
     * storage indicates this version should be used when persisting custom resources
     * to storage. There must be exactly one version with storage=true.
     *
     * @var boolean
     */
    public $storage = null;

    /**
     * subresources specify what subresources this version of the defined custom
     * resource have.
     *
     * @var CustomResourceSubresources
     */
    public $subresources = null;
}

