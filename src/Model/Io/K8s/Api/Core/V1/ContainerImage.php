<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Describe a container image
 */
class ContainerImage extends AbstractModel
{

    /**
     * Names by which this image is known. e.g. ["k8s.gcr.io/hyperkube:v1.0.7",
     * "dockerhub.io/google_containers/hyperkube:v1.0.7"]
     *
     * @var string[]
     */
    public $names = null;

    /**
     * The size of the image in bytes.
     *
     * @var integer
     */
    public $sizeBytes = null;


}

