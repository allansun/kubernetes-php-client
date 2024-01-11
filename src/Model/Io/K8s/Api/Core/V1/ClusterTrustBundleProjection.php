<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ClusterTrustBundleProjection describes how to select a set of ClusterTrustBundle
 * objects and project their contents into the pod filesystem.
 */
class ClusterTrustBundleProjection extends AbstractModel
{
    /**
     * Select all ClusterTrustBundles that match this label selector.  Only has effect
     * if signerName is set.  Mutually-exclusive with name.  If unset, interpreted as
     * "match nothing".  If set but empty, interpreted as "match everything".
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $labelSelector = null;

    /**
     * Select a single ClusterTrustBundle by object name.  Mutually-exclusive with
     * signerName and labelSelector.
     *
     * @var string
     */
    public $name = null;

    /**
     * If true, don't block pod startup if the referenced ClusterTrustBundle(s) aren't
     * available.  If using name, then the named ClusterTrustBundle is allowed not to
     * exist.  If using signerName, then the combination of signerName and
     * labelSelector is allowed to match zero ClusterTrustBundles.
     *
     * @var boolean
     */
    public $optional = null;

    /**
     * Relative path from the volume root to write the bundle.
     *
     * @var string
     */
    public $path = null;

    /**
     * Select all ClusterTrustBundles that match this signer name. Mutually-exclusive
     * with name.  The contents of all selected ClusterTrustBundles will be unified and
     * deduplicated.
     *
     * @var string
     */
    public $signerName = null;
}

