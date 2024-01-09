<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceAccount binds together: * a name, understood by users, and perhaps by
 * peripheral systems, for an identity * a principal that can be authenticated and
 * authorized * a set of secrets
 */
class ServiceAccount extends AbstractModel
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
     * AutomountServiceAccountToken indicates whether pods running as this service
     * account should have an API token automatically mounted. Can be overridden at the
     * pod level.
     *
     * @var boolean
     */
    public $automountServiceAccountToken = null;

    /**
     * ImagePullSecrets is a list of references to secrets in the same namespace to use
     * for pulling any images in pods that reference this ServiceAccount.
     * ImagePullSecrets are distinct from Secrets because Secrets can be mounted in the
     * pod, but ImagePullSecrets are only accessed by the kubelet. More info:
     * https://kubernetes.io/docs/concepts/containers/images/#specifying-imagepullsecrets-on-a-pod
     *
     * @var LocalObjectReference[]
     */
    public $imagePullSecrets = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ServiceAccount';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Secrets is a list of the secrets in the same namespace that pods running using
     * this ServiceAccount are allowed to use. Pods are only limited to this list if
     * this service account has a "kubernetes.io/enforce-mountable-secrets" annotation
     * set to "true". This field should not be used to find auto-generated service
     * account token secrets for use outside of pods. Instead, tokens can be requested
     * directly using the TokenRequest API, or service account token secrets can be
     * manually created. More info:
     * https://kubernetes.io/docs/concepts/configuration/secret
     *
     * @var ObjectReference[]
     */
    public $secrets = null;
}

