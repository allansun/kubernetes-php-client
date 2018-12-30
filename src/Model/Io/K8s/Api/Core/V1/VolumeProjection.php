<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Projection that may be projected along with other supported volume types
 */
class VolumeProjection extends \Kubernetes\AbstractModel
{

    /**
     * information about the configMap data to project
     *
     * @var ConfigMapProjection
     */
    public $configMap = null;

    /**
     * information about the downwardAPI data to project
     *
     * @var DownwardAPIProjection
     */
    public $downwardAPI = null;

    /**
     * information about the secret data to project
     *
     * @var SecretProjection
     */
    public $secret = null;

    /**
     * information about the serviceAccountToken data to project
     *
     * @var ServiceAccountTokenProjection
     */
    public $serviceAccountToken = null;


}

