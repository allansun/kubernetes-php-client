<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Projection that may be projected along with other supported volume types
 */
class VolumeProjection extends AbstractModel
{
    /**
     * configMap information about the configMap data to project
     *
     * @var ConfigMapProjection
     */
    public $configMap = null;

    /**
     * downwardAPI information about the downwardAPI data to project
     *
     * @var DownwardAPIProjection
     */
    public $downwardAPI = null;

    /**
     * secret information about the secret data to project
     *
     * @var SecretProjection
     */
    public $secret = null;

    /**
     * serviceAccountToken is information about the serviceAccountToken data to project
     *
     * @var ServiceAccountTokenProjection
     */
    public $serviceAccountToken = null;
}

