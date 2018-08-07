<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

/**
 * DEPRECATED - This group version of DaemonSet is deprecated by apps/v1/DaemonSet.
 * See the release notes for more information. DaemonSet represents the
 * configuration of a daemon set.
 *
 * @deprecated
 */
class DaemonSet extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1beta2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'DaemonSet';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * The desired behavior of this daemon set. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var DaemonSetSpec
     */
    public $spec = null;

    /**
     * The current status of this daemon set. This data may be out of date by some
     * window of time. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var DaemonSetStatus
     */
    public $status = null;


}

