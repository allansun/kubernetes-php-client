<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * Represents a Flocker volume mounted by the Flocker agent.
 * One and only one of datasetName and datasetUUID should be set.
 * Flocker volumes do not support ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class FlockerVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Name of the dataset stored as metadata -> name on the dataset for Flocker should be considered as deprecated
     */
    public $datasetName;

    /**
     * @var string
     * UUID of the dataset. This is unique identifier of a Flocker dataset
     */
    public $datasetUUID;

}