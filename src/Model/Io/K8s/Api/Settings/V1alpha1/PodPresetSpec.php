<?php

namespace Kubernetes\Model\Io\K8s\Api\Settings\V1alpha1;

/**
 * PodPresetSpec is a description of a pod preset.
 */
class PodPresetSpec extends \Kubernetes\AbstractModel
{

    /**
     * Env defines the collection of EnvVar to inject into containers.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\EnvVar[]
     */
    public $env = null;

    /**
     * EnvFrom defines the collection of EnvFromSource to inject into containers.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\EnvFromSource[]
     */
    public $envFrom = null;

    /**
     * Selector is a label query over a set of resources, in this case pods. Required.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * VolumeMounts defines the collection of VolumeMount to inject into containers.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\VolumeMount[]
     */
    public $volumeMounts = null;

    /**
     * Volumes defines the collection of Volume to inject into the pod.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\Volume[]
     */
    public $volumes = null;


}

