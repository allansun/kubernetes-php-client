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

class ResourceQuota extends AbstractModel
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
    public $kind = 'ResourceQuota';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var ResourceQuotaSpec
     * Spec defines the desired quota. http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     */
    public $spec;

    /**
     * @var ResourceQuotaStatus
     * Status defines the actual enforced quota and its current usage.
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
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
     * @param ResourceQuotaSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, ResourceQuotaSpec::class, false);

        return $this;
    }

    /**
     * @param ResourceQuotaStatus $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $this->_createPropertyValue($status, ResourceQuotaStatus::class, false);

        return $this;
    }

}