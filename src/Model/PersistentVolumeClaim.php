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


use Kubernetes\Model\Tag\Version;

/**
 * PersistentVolumeClaim is a user's request for and claim to a persistent volume
 *
 * @package Kubernetes\Model
 */
class PersistentVolumeClaim extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'PersistentVolumeClaim ';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var PersistentVolumeClaimSpec
     * Spec defines the desired characteristics of a volume requested by a pod author. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#persistentvolumeclaims
     */
    public $spec;

    /**
     * @var ReplicaSePersistentVolumeClaimStatustStatus
     * Status represents the current information/status of a persistent volume claim. Read-only. More info:
     * http://kubernetes.io/docs/user-guide/persistent-volumes#persistentvolumeclaims
     */
    public $status;

    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ObjectMeta::class, false);

        return $this;
    }

    /**
     * @param PersistentVolumeClaimSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, PersistentVolumeClaimSpec::class, false);

        return $this;
    }

    /**
     * @param ReplicaSePersistentVolumeClaimStatustStatus $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $this->_createPropertyValue($status, ReplicaSePersistentVolumeClaimStatustStatus::class, false);

        return $this;
    }

}