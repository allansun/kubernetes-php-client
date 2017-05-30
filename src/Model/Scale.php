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


use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class Scale extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Group::APPS . '/' . Version::V1BETA1;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var ScaleSpec
     * defines the behavior of the scale. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status.
     */
    public $spec;

    /**
     * @var ScaleStatus
     * current status of the scale. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status. Read-only.
     */
    public $status;

    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = new ObjectMeta($metadata);

        return $this;
    }

    /**
     * @param ScaleSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = new DeploymentSpec($spec);

        return $this;
    }

    /**
     * @param ScaleStatus $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = new DeploymentStatus($status);

        return $this;
    }

}