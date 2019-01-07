<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Represents a Flocker volume mounted by the Flocker agent. One and only one of
 * datasetName and datasetUUID should be set. Flocker volumes do not support
 * ownership management or SELinux relabeling.
 */
class FlockerVolumeSource extends \Kubernetes\AbstractModel
{

    /**
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should
     * be considered as deprecated
     *
     * @var string
     */
    public $datasetName = null;

    /**
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     *
     * @var string
     */
    public $datasetUUID = null;


}

