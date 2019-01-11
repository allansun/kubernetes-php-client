<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodTemplateSpec describes the data a pod should have when created from a
 * template
 */
class PodTemplateSpec extends \Kubernetes\AbstractModel
{

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the pod. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var PodSpec
     */
    public $spec = null;


}

