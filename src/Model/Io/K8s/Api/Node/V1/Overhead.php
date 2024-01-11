<?php

namespace Kubernetes\Model\Io\K8s\Api\Node\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Overhead structure represents the resource overhead associated with running a
 * pod.
 */
class Overhead extends AbstractModel
{
    /**
     * PodFixed represents the fixed resource overhead associated with running a pod.
     *
     * @var object
     */
    public $podFixed = null;
}

