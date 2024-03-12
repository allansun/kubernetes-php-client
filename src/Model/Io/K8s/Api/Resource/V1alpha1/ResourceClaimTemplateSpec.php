<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimTemplateSpec contains the metadata and fields for a ResourceClaim.
 */
class ResourceClaimTemplateSpec extends AbstractModel
{
    /**
     * ObjectMeta may contain labels and annotations that will be copied into the PVC
     * when creating it. No other fields are allowed and will be rejected during
     * validation.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec for the ResourceClaim. The entire content is copied unchanged into the
     * ResourceClaim that gets created from this template. The same fields as in a
     * ResourceClaim are also valid here.
     *
     * @var ResourceClaimSpec
     */
    public $spec = null;
}

