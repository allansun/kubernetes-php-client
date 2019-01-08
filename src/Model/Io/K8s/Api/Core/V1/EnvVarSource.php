<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EnvVarSource represents a source for the value of an EnvVar.
 */
class EnvVarSource extends \Kubernetes\AbstractModel
{

    /**
     * Selects a key of a ConfigMap.
     *
     * @var ConfigMapKeySelector
     */
    public $configMapKeyRef = null;

    /**
     * Selects a field of the pod: supports metadata.name, metadata.namespace,
     * metadata.labels, metadata.annotations, spec.nodeName, spec.serviceAccountName,
     * status.hostIP, status.podIP.
     *
     * @var ObjectFieldSelector
     */
    public $fieldRef = null;

    /**
     * Selects a resource of the container: only resources limits and requests
     * (limits.cpu, limits.memory, limits.ephemeral-storage, requests.cpu,
     * requests.memory and requests.ephemeral-storage) are currently supported.
     *
     * @var ResourceFieldSelector
     */
    public $resourceFieldRef = null;

    /**
     * Selects a key of a secret in the pod's namespace
     *
     * @var SecretKeySelector
     */
    public $secretKeyRef = null;


}

