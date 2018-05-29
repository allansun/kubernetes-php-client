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

class CronJob extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Group::BATCH . '/' . Version::V1BETA1;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'CronJob';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var CronJobSpec
     * Spec is a structure defining the expected behavior of a job, including the schedule. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     */
    public $spec;

    /**
     * @var CronJobStatus
     * Status is a structure describing current status of a job. More info:
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
     * @param CronJobSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, CronJobSpec::class, false);

        return $this;
    }

    /**
     * @param CronJobStatus $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $this->_createPropertyValue($status, CronJobStatus::class, false);

        return $this;
    }
}