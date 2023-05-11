<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * AzureFile represents an Azure File Service mount on the host and bind mount to
 * the pod.
 */
class AzureFilePersistentVolumeSource extends AbstractModel
{

    /**
     * readOnly defaults to false (read/write). ReadOnly here will force the ReadOnly
     * setting in VolumeMounts.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * secretName is the name of secret that contains Azure Storage Account Name and
     * Key
     *
     * @var string
     */
    public $secretName = null;

    /**
     * secretNamespace is the namespace of the secret that contains Azure Storage
     * Account Name and Key default is the same as the Pod
     *
     * @var string
     */
    public $secretNamespace = null;

    /**
     * shareName is the azure Share Name
     *
     * @var string
     */
    public $shareName = null;


}

