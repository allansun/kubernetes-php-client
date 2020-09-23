<?php

namespace Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1;

/**
 * API server instances report the versions they can decode and the version they
 * encode objects to when persisting objects in the backend.
 */
class StorageVersionStatus extends \KubernetesRuntime\AbstractModel
{

    /**
     * If all API server instances agree on the same encoding storage version, then
     * this field is set to that version. Otherwise this field is left empty. API
     * servers should finish updating its storageVersionStatus entry before serving
     * write operations, so that this field will be in sync with the reality.
     *
     * @var string
     */
    public $commonEncodingVersion = null;

    /**
     * The latest available observations of the storageVersion's state.
     *
     * @var StorageVersionCondition[]
     */
    public $conditions = null;

    /**
     * The reported versions per API server instance.
     *
     * @var ServerStorageVersion[]
     */
    public $storageVersions = null;


}

