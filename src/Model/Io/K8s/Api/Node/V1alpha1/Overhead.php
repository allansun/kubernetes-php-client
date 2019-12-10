<?php

namespace Kubernetes\Model\Io\K8s\Api\Node\V1alpha1;

/**
 * Overhead structure represents the resource overhead associated with running a
 * pod.
 */
class Overhead extends \KubernetesRuntime\AbstractModel
{

    /**
     * PodFixed represents the fixed resource overhead associated with running a pod.
     *
     * @var object
     */
    public $podFixed = null;


}

