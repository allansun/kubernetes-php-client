<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Core\V1\EventList as EventList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Event as Event;
use \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\EventList as EventList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Events\V1beta1\Event as Event;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Event extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Event
     *
     * @return EventList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/events"
        		,[
        		]
        	)
        	, 'listCoreV1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param string $namespace
     * @param array $queries
     * @return EventList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/events"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param string $namespace
     * @param Event $Model
     * @return Event|mixed
     */
    public function create(string $namespace = 'default', \Event $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/events"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/events"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Event|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $namespace
     * @param $name
     * @param Event $Model
     * @return Event|mixed
     */
    public function replace(string $namespace = 'default', $name, \Event $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Event|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/events"
        		,[
        		]
        	)
        	, 'watchCoreV1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/events"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/events/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedEvent'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @return EventList|mixed
     */
    public function listForAllNamespacesEventsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/events"
        		,[
        		]
        	)
        	, 'listEventsV1beta1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param string $namespace
     * @param array $queries
     * @return EventList|mixed
     */
    public function listEventsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param string $namespace
     * @param Event $Model
     * @return Event|mixed
     */
    public function createEventsV1beta1(string $namespace = 'default', \Event $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionEventsV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteEventsV1beta1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Event|mixed
     */
    public function readEventsV1beta1(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $namespace
     * @param $name
     * @param Event $Model
     * @return Event|mixed
     */
    public function replaceEventsV1beta1(string $namespace = 'default', $name, \Event $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteEventsV1beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Event|mixed
     */
    public function patchEventsV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/events.k8s.io/v1beta1/namespaces/{$namespace}/events/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchEventsV1beta1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesEventsV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/events"
        		,[
        		]
        	)
        	, 'watchEventsV1beta1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchListEventsV1beta1(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/namespaces/{$namespace}/events"
        		,[
        		]
        	)
        	, 'watchEventsV1beta1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchEventsV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1beta1/watch/namespaces/{$namespace}/events/{$name}"
        		,[
        		]
        	)
        	, 'watchEventsV1beta1NamespacedEvent'
        );
    }


}

