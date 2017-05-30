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

class Event extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var integer
     * The number of times this event has occurred.
     */
    public $count;

    /**
     * @var string
     * The time at which the event was first recorded. (Time of server receipt is in TypeMeta.)
     */
    public $firstTimestamp;

    /**
     * @var ObjectReference
     * The object that this event is about.
     */
    public $involvedObject;
    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'Event';

    /**
     * @var string
     * The time at which the most recent occurrence of this event was recorded.
     */
    public $lastTimestamp;


    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var string
     * The time at which the most recent occurrence of this event was recorded.
     */
    public $reason;

    /**
     * @var EventSource
     * The component reporting this event. Should be a short machine understandable string.
     */
    public $source;

    /**
     * @var string
     * Type of this event (Normal, Warning), new types could be added in the future
     */
    public $type;

    /**
     * @param ObjectReference $involvedObject
     *
     * @return self
     */
    public function setInvolvedObject($involvedObject)
    {
        $this->involvedObject = $this->_createPropertyValue($involvedObject, ObjectReference::class, false);

        return $this;
    }

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
     * @param EventSource $source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $this->_createPropertyValue($source, EventSource::class, false);

        return $this;
    }


}