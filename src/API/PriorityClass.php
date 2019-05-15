<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClassList as PriorityClassList;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass as ThePriorityClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClassList as PriorityClassListV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass as ThePriorityClassV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1beta1\PriorityClassList as PriorityClassListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1beta1\PriorityClass as ThePriorityClassV1beta1;

class PriorityClass extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return PriorityClassList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listSchedulingV1PriorityClass'
        );
    }

    /**
     * create a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param ThePriorityClass $Model
     * @param array $queries
     * @return ThePriorityClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/scheduling.k8s.io/v1/priorityclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createSchedulingV1PriorityClass'
        );
    }

    /**
     * delete collection of PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1CollectionPriorityClass'
        );
    }

    /**
     * read the specified PriorityClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePriorityClass|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readSchedulingV1PriorityClass'
        );
    }

    /**
     * replace the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePriorityClass $Model
     * @param array $queries
     * @return ThePriorityClass|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceSchedulingV1PriorityClass'
        );
    }

    /**
     * delete a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1PriorityClass'
        );
    }

    /**
     * partially update the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return ThePriorityClass|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchSchedulingV1PriorityClass'
        );
    }

    /**
     * watch individual changes to a list of PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/watch/priorityclasses"
        		,[
        		]
        	)
        	, 'watchSchedulingV1PriorityClassList'
        );
    }

    /**
     * watch changes to an object of kind PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/watch/priorityclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchSchedulingV1PriorityClass'
        );
    }

    /**
     * list or watch objects of kind PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return PriorityClassListV1alpha1|mixed
     */
    public function listSchedulingV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * create a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param ThePriorityClassV1alpha1 $Model
     * @param array $queries
     * @return ThePriorityClassV1alpha1|mixed
     */
    public function createSchedulingV1alpha1(\Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * delete collection of PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionSchedulingV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1alpha1CollectionPriorityClass'
        );
    }

    /**
     * read the specified PriorityClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePriorityClassV1alpha1|mixed
     */
    public function readSchedulingV1alpha1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * replace the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePriorityClassV1alpha1 $Model
     * @param array $queries
     * @return ThePriorityClassV1alpha1|mixed
     */
    public function replaceSchedulingV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Scheduling\V1alpha1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * delete a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteSchedulingV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * partially update the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return ThePriorityClassV1alpha1|mixed
     */
    public function patchSchedulingV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/scheduling.k8s.io/v1alpha1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * watch individual changes to a list of PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListSchedulingV1alpha1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses"
        		,[
        		]
        	)
        	, 'watchSchedulingV1alpha1PriorityClassList'
        );
    }

    /**
     * watch changes to an object of kind PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchSchedulingV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1alpha1/watch/priorityclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchSchedulingV1alpha1PriorityClass'
        );
    }

    /**
     * list or watch objects of kind PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return PriorityClassListV1beta1|mixed
     */
    public function listSchedulingV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * create a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param ThePriorityClassV1beta1 $Model
     * @param array $queries
     * @return ThePriorityClassV1beta1|mixed
     */
    public function createSchedulingV1beta1(\Kubernetes\Model\Io\K8s\Api\Scheduling\V1beta1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * delete collection of PriorityClass
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionSchedulingV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1beta1CollectionPriorityClass'
        );
    }

    /**
     * read the specified PriorityClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePriorityClassV1beta1|mixed
     */
    public function readSchedulingV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * replace the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePriorityClassV1beta1 $Model
     * @param array $queries
     * @return ThePriorityClassV1beta1|mixed
     */
    public function replaceSchedulingV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Scheduling\V1beta1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * delete a PriorityClass
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteSchedulingV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * partially update the specified PriorityClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return ThePriorityClassV1beta1|mixed
     */
    public function patchSchedulingV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/scheduling.k8s.io/v1beta1/priorityclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchSchedulingV1beta1PriorityClass'
        );
    }

    /**
     * watch individual changes to a list of PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListSchedulingV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1beta1/watch/priorityclasses"
        		,[
        		]
        	)
        	, 'watchSchedulingV1beta1PriorityClassList'
        );
    }

    /**
     * watch changes to an object of kind PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchSchedulingV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1beta1/watch/priorityclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchSchedulingV1beta1PriorityClass'
        );
    }


}

