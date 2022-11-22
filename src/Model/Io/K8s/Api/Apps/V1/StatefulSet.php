<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * StatefulSet represents a set of pods with consistent identities. Identities are
 * defined as:
 *  - Network: A single stable DNS and hostname.
 *  - Storage: As many VolumeClaims as requested.
 * The StatefulSet guarantees that a given network identity will always map to the
 * same storage identity.
 */
class StatefulSet extends AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'StatefulSet';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines the desired identities of pods in this set.
     *
     * @var StatefulSetSpec
     */
    public $spec = null;

    /**
     * Status is the current status of Pods in this StatefulSet. This data may be out
     * of date by some window of time.
     *
     * @var StatefulSetStatus
     */
    public $status = null;


}

