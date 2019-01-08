<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * PodDisruptionBudget is an object to define the max disruption that can be caused
 * to a collection of pods
 */
class PodDisruptionBudget extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'policy/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'PodDisruptionBudget';

    /**
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the PodDisruptionBudget.
     *
     * @var PodDisruptionBudgetSpec
     */
    public $spec = null;

    /**
     * Most recently observed status of the PodDisruptionBudget.
     *
     * @var PodDisruptionBudgetStatus
     */
    public $status = null;


}

