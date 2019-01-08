<?php

namespace Kubernetes\Model\Io\K8s\Api\Scheduling\V1beta1;

/**
 * PriorityClass defines mapping from a priority class name to the priority integer
 * value. The value can be any valid integer.
 */
class PriorityClass extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'scheduling.k8s.io/v1beta1';

    /**
     * description is an arbitrary string that usually provides guidelines on when this
     * priority class should be used.
     *
     * @var string
     */
    public $description = null;

    /**
     * globalDefault specifies whether this PriorityClass should be considered as the
     * default priority for pods that do not have any priority class. Only one
     * PriorityClass can be marked as `globalDefault`. However, if more than one
     * PriorityClasses exists with their `globalDefault` field set to true, the
     * smallest value of such global default PriorityClasses will be used as the
     * default priority.
     *
     * @var boolean
     */
    public $globalDefault = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'PriorityClass';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * The value of this priority class. This is the actual priority that pods receive
     * when they have the name of this class in their pod spec.
     *
     * @var integer
     */
    public $value = null;


}

