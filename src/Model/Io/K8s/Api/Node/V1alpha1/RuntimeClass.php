<?php

namespace Kubernetes\Model\Io\K8s\Api\Node\V1alpha1;

/**
 * RuntimeClass defines a class of container runtime supported in the cluster. The
 * RuntimeClass is used to determine which container runtime is used to run all
 * containers in a pod. RuntimeClasses are (currently) manually defined by a user
 * or cluster provisioner, and referenced in the PodSpec. The Kubelet is
 * responsible for resolving the RuntimeClassName reference before running the pod.
 *  For more details, see
 * https://git.k8s.io/enhancements/keps/sig-node/runtime-class.md
 */
class RuntimeClass extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'node.k8s.io/v1alpha1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'RuntimeClass';

    /**
     * More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the RuntimeClass More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var RuntimeClassSpec
     */
    public $spec = null;


}

