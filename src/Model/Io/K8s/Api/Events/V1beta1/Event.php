<?php

namespace Kubernetes\Model\Io\K8s\Api\Events\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * Event is a report of an event somewhere in the cluster. It generally denotes
 * some state change in the system. Events have a limited retention time and
 * triggers and messages may evolve with time.  Event consumers should not rely on
 * the timing of an event with a given Reason reflecting a consistent underlying
 * trigger, or the continued existence of events with that Reason.  Events should
 * be treated as informative, best-effort, supplemental data.
 */
class Event extends AbstractModel
{

    /**
     * action is what action was taken/failed regarding to the regarding object. It is
     * machine-readable. This field can have at most 128 characters.
     *
     * @var string
     */
    public $action = null;

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'events.k8s.io/v1beta1';

    /**
     * deprecatedCount is the deprecated field assuring backward compatibility with
     * core.v1 Event type.
     *
     * @var integer
     */
    public $deprecatedCount = null;

    /**
     * deprecatedFirstTimestamp is the deprecated field assuring backward compatibility
     * with core.v1 Event type.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $deprecatedFirstTimestamp = null;

    /**
     * deprecatedLastTimestamp is the deprecated field assuring backward compatibility
     * with core.v1 Event type.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $deprecatedLastTimestamp = null;

    /**
     * deprecatedSource is the deprecated field assuring backward compatibility with
     * core.v1 Event type.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\EventSource
     */
    public $deprecatedSource = null;

    /**
     * eventTime is the time when this Event was first observed. It is required.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $eventTime = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Event';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * note is a human-readable description of the status of this operation. Maximal
     * length of the note is 1kB, but libraries should be prepared to handle values up
     * to 64kB.
     *
     * @var string
     */
    public $note = null;

    /**
     * reason is why the action was taken. It is human-readable. This field can have at
     * most 128 characters.
     *
     * @var string
     */
    public $reason = null;

    /**
     * regarding contains the object this Event is about. In most cases it's an Object
     * reporting controller implements, e.g. ReplicaSetController implements
     * ReplicaSets and this event is emitted because it acts on some changes in a
     * ReplicaSet object.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $regarding = null;

    /**
     * related is the optional secondary object for more complex actions. E.g. when
     * regarding object triggers a creation or deletion of related object.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\ObjectReference
     */
    public $related = null;

    /**
     * reportingController is the name of the controller that emitted this Event, e.g.
     * `kubernetes.io/kubelet`. This field cannot be empty for new Events.
     *
     * @var string
     */
    public $reportingController = null;

    /**
     * reportingInstance is the ID of the controller instance, e.g. `kubelet-xyzf`.
     * This field cannot be empty for new Events and it can have at most 128
     * characters.
     *
     * @var string
     */
    public $reportingInstance = null;

    /**
     * series is data about the Event series this event represents or nil if it's a
     * singleton Event.
     *
     * @var EventSeries
     */
    public $series = null;

    /**
     * type is the type of this event (Normal, Warning), new types could be added in
     * the future. It is machine-readable.
     *
     * @var string
     */
    public $type = null;


}

