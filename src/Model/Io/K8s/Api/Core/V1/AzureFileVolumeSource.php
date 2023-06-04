<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * AzureFile represents an Azure File Service mount on the host and bind mount to
 * the pod.
 */
class AzureFileVolumeSource extends AbstractModel
{

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretName is the  name of secret that contains Azure Storage Account Name and
     * Key
     *
     * @var string
     */
    public $secretName = null;

    /**
     * shareName is the azure share Name
     *
     * @var string
     */
    public $shareName = null;


}

