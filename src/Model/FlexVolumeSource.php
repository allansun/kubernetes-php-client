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
 * FlexVolume represents a generic volume resource that is provisioned/attached using an exec based plugin.
 * This is an alpha feature and may change in future.
 *
 * @package Kubernetes\Model
 */
class FlexVolumeSource extends AbstractModel
{
    /**
     * @var string
     * Driver is the name of the driver to use for this volume.
     */
    public $driver;

    /**
     * @var string
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system.
     * Ex. "ext4", "xfs", "ntfs". The default filesystem depends on FlexVolume script.
     */
    public $fsType;

    /**
     * @var object
     * Optional: Extra command options if any.
     */
    public $options;

    /**
     * @var boolean
     * Optional: Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public $readOnly = false;

    /**
     * @var LocalObjectReference
     * Optional: SecretRef is reference to the secret object containing sensitive information to pass to the
     * plugin scripts. This may be empty if no secret object is specified.
     * If the secret object contains more than one secret, all secrets are passed to the plugin scripts.
     */
    public $secretRef;

    /**
     * @param LocalObjectReference $secretRef
     *
     * @return self
     */
    public function setSecretRef($secretRef)
    {
        $this->secretRef = $this->_createPropertyValue($secretRef, LocalObjectReference::class, false);

        return $this;
    }

}