<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Secret holds secret data of a certain type. The total bytes of the values in the
 * Data field must be less than MaxSecretSize bytes.
 */
class Secret extends AbstractModel
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
     * Data contains the secret data. Each key must consist of alphanumeric characters,
     * '-', '_' or '.'. The serialized form of the secret data is a base64 encoded
     * string, representing the arbitrary (possibly non-string) data value here.
     * Described in https://tools.ietf.org/html/rfc4648#section-4
     *
     * @var object
     */
    public $data = null;

    /**
     * Immutable, if set to true, ensures that data stored in the Secret cannot be
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
    public $kind = 'Secret';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * stringData allows specifying non-binary secret data in string form. It is
     * provided as a write-only input field for convenience. All keys and values are
     * merged into the data field on write, overwriting any existing values. The
     * stringData field is never output when reading from the API.
     *
     * @var object
     */
    public $stringData = null;

    /**
     * Used to facilitate programmatic handling of secret data.
     *
     * @var string
     */
    public $type = null;


}

