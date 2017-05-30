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
 * Represents a Glusterfs mount that lasts the lifetime of a pod.
 * Glusterfs volumes do not support ownership management or SELinux relabeling.
 *
 * @package Kubernetes\Model
 */
class GlusterfsVolumeSource extends AbstractModel
{
    /**
     * @var string
     * EndpointsName is the endpoint name that details Glusterfs topology.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     */
    public $endpoints;

    /**
     * @var string
     * Path is the Glusterfs volume path.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     */
    public $path;

    /**
     * @var boolean
     * ReadOnly here will force the Glusterfs volume to be mounted with read-only permissions. Defaults to false.
     * More info: http://releases.k8s.io/HEAD/examples/volumes/glusterfs/README.md#create-a-pod
     */
    public $readOnly = false;

}