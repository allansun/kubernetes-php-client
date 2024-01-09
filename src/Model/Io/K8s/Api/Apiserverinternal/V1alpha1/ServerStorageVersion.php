<?php

namespace Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * An API server instance reports the version it can decode and the version it
 * encodes objects to when persisting objects in the backend.
 */
class ServerStorageVersion extends AbstractModel
{
    /**
     * The ID of the reporting API server.
     *
     * @var string
     */
    public $apiServerID = null;

    /**
     * The API server can decode objects encoded in these versions. The encodingVersion
     * must be included in the decodableVersions.
     *
     * @var string[]
     */
    public $decodableVersions = null;

    /**
     * The API server encodes the object to this version when persisting it in the
     * backend (e.g., etcd).
     *
     * @var string
     */
    public $encodingVersion = null;
}

