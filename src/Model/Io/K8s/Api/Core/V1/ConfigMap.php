<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ConfigMap holds configuration data for pods to consume.
 */
class ConfigMap extends AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'v1';

    /**
     * BinaryData contains the binary data. Each key must consist of alphanumeric
     * characters, '-', '_' or '.'. BinaryData can contain byte sequences that are not
     * in the UTF-8 range. The keys stored in BinaryData must not overlap with the ones
     * in the Data field, this is enforced during validation process. Using this field
     * will require 1.10+ apiserver and kubelet.
     *
     * @var object
     */
    public $binaryData = null;

    /**
     * Data contains the configuration data. Each key must consist of alphanumeric
     * characters, '-', '_' or '.'. Values with non-UTF-8 byte sequences must use the
     * BinaryData field. The keys stored in Data must not overlap with the keys in the
     * BinaryData field, this is enforced during validation process.
     *
     * @var object
     */
    public $data = null;

    /**
     * Immutable, if set to true, ensures that data stored in the ConfigMap cannot be
     * updated (only object metadata can be modified). If not set to true, the field
     * can be modified at any time. Defaulted to nil.
     *
     * @var boolean
     */
    public $immutable = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ConfigMap';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;


}

