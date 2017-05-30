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
 * Describe a container image
 *
 * @package Kubernetes\Model
 */
class ContainerImage extends AbstractModel
{

    /**
     * @var string
     * Names by which this image is known.
     * e.g. ["gcr.io/google_containers/hyperkube:v1.0.7", "dockerhub.io/google_containers/hyperkube:v1.0.7"]
     */
    public $name;

    /**
     * @var integer
     * The size of the image in bytes.
     */
    public $sizeBytes;
}