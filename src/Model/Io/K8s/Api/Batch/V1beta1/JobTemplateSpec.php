<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1beta1;

/**
 * JobTemplateSpec describes the data a Job should have when created from a
 * template
 */
class JobTemplateSpec extends \Kubernetes\AbstractModel
{

    /**
     * Standard object's metadata of the jobs created from this template. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the desired behavior of the job. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Batch\V1\JobSpec
     */
    public $spec = null;


}

