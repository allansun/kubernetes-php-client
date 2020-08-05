<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PersistentVolumeClaimTemplate is used to produce PersistentVolumeClaim objects
 * as part of an EphemeralVolumeSource.
 */
class PersistentVolumeClaimTemplate extends \KubernetesRuntime\AbstractModel
{

    /**
     * May contain labels and annotations that will be copied into the PVC when
     * creating it. No other fields are allowed and will be rejected during validation.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * The specification for the PersistentVolumeClaim. The entire content is copied
     * unchanged into the PVC that gets created from this template. The same fields as
     * in a PersistentVolumeClaim are also valid here.
     *
     * @var PersistentVolumeClaimSpec
     */
    public $spec = null;


}

