<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Event is a report of an event somewhere in the cluster.
 */
class Event extends \Kubernetes\AbstractModel
{

    /**
     * What action was taken/failed regarding to the Regarding object.
     *
     * @var string
     */
    public $action = null;

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'v1';

    /**
     * The number of times this event has occurred.
     *
     * @var integer
     */
    public $count = null;

    /**
     * Time when this Event was first observed.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $eventTime = null;

    /**
     * The time at which the event was first recorded. (Time of server receipt is in
     * TypeMeta.)
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $firstTimestamp = null;

    /**
     * The object that this event is about.
     *
     * @var ObjectReference
     */
    public $involvedObject = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Event';

    /**
     * The time at which the most recent occurrence of this event was recorded.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTimestamp = null;

    /**
     * A human-readable description of the status of this operation.
     *
     * @var string
     */
    public $message = null;

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * This should be a short, machine understandable string that gives the reason for
     * the transition into the object's current status.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Optional secondary object for more complex actions.
     *
     * @var ObjectReference
     */
    public $related = null;

    /**
     * Name of the controller that emitted this Event, e.g. `kubernetes.io/kubelet`.
     *
     * @var string
     */
    public $reportingComponent = null;

    /**
     * ID of the controller instance, e.g. `kubelet-xyzf`.
     *
     * @var string
     */
    public $reportingInstance = null;

    /**
     * Data about the Event series this event represents or nil if it's a singleton
     * Event.
     *
     * @var EventSeries
     */
    public $series = null;

    /**
     * The component reporting this event. Should be a short machine understandable
     * string.
     *
     * @var EventSource
     */
    public $source = null;

    /**
     * Type of this event (Normal, Warning), new types could be added in the future
     *
     * @var string
     */
    public $type = null;


}

