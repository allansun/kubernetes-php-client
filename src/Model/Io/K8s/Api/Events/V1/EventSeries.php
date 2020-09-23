<?php

namespace Kubernetes\Model\Io\K8s\Api\Events\V1;

/**
 * EventSeries contain information on series of events, i.e. thing that was/is
 * happening continuously for some time. How often to update the EventSeries is up
 * to the event reporters. The default event reporter in
 * "k8s.io/client-go/tools/events/event_broadcaster.go" shows how this struct is
 * updated on heartbeats and can guide customized reporter implementations.
 */
class EventSeries extends \KubernetesRuntime\AbstractModel
{

    /**
     * count is the number of occurrences in this series up to the last heartbeat time.
     *
     * @var integer
     */
    public $count = null;

    /**
     * lastObservedTime is the time when last Event from the series was seen before
     * last heartbeat.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $lastObservedTime = null;


}

