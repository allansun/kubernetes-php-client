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
 * AzureFile represents an Azure File Service mount on the host and bind mount to the pod.
 *
 * @package Kubernetes\Model
 */
class AzureFileVolumeSource extends AbstractModel
{
    /**
     * @var boolean
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly;

    /**
     * @var string
     * the name of secret that contains Azure Storage Account Name and Key
     */
    public $secretName;

    /**
     * @var string
     * Share Name
     */
    public $shareName;
}