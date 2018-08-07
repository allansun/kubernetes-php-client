<?php

namespace Kubernetes\Model\Io\K8s\Api\Events\V1beta1;

/**
 * Event is a report of an event somewhere in the cluster. It generally denotes
 * some state change in the system.
 */
class Event extends \Kubernetes\AbstractModel
{

    /**
     * What action was taken/failed regarding to the regarding object.
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
    public $apiVersion = 'events.k8s.io/v1beta1';

    /**
     * Deprecated field assuring backward compatibility with core.v1 Event type
     *
     * @var integer
     */
    public $deprecatedCount = null;

    /**
     * Deprecated field assuring backward compatibility with core.v1 Event type
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $deprecatedFirstTimestamp = null;

    /**
     * Deprecated field assuring backward compatibility with core.v1 Event type
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $deprecatedLastTimestamp = null;

    /**
     * Deprecated field assuring backward compatibility with core.v1 Event type
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\EventSource
     */
    public $deprecatedSource = null;

    /**
     * Required. Time when this Event was first observed.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $eventTime = null;

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
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Optional. A human-readable description of the status of this operation. Maximal
     * length of the note is 1kB, but libraries should be prepared to handle values up
     * to 64kB.
     *
     * @var string
     */
    public $note = null;

    /**
     * Why the action was taken.
     *
     * @var string
     */
    public $reason = null;

    /**
     * The object this Event is about. In most cases it's an Object reporting
     * controller implements. E.g. ReplicaSetController implements ReplicaSets and this
     * event is emitted because it acts on some changes in a ReplicaSet object.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $regarding = null;

    /**
     * Optional secondary object for more complex actions. E.g. when regarding object
     * triggers a creation or deletion of related object.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $related = null;

    /**
     * Name of the controller that emitted this Event, e.g. `kubernetes.io/kubelet`.
     *
     * @var string
     */
    public $reportingController = null;

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
     * Type of this event (Normal, Warning), new types could be added in the future.
     *
     * @var string
     */
    public $type = null;


}

