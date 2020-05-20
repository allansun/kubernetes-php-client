<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Node\V1alpha1\RuntimeClassList as RuntimeClassList;
use \Kubernetes\Model\Io\K8s\Api\Node\V1alpha1\RuntimeClass as TheRuntimeClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Node\V1beta1\RuntimeClassList as RuntimeClassListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Node\V1beta1\RuntimeClass as TheRuntimeClassV1beta1;

class RuntimeClass extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind RuntimeClass
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
     * @return RuntimeClassList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * create a RuntimeClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheRuntimeClass $Model
     * @param array $queries
     * @return TheRuntimeClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Node\V1alpha1\RuntimeClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * delete collection of RuntimeClass
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNodeV1alpha1CollectionRuntimeClass'
        );
    }

    /**
     * read the specified RuntimeClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheRuntimeClass|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * replace the specified RuntimeClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheRuntimeClass $Model
     * @param array $queries
     * @return TheRuntimeClass|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Node\V1alpha1\RuntimeClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * delete a RuntimeClass
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
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * partially update the specified RuntimeClass
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
     * @return TheRuntimeClass|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/node.k8s.io/v1alpha1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * watch individual changes to a list of RuntimeClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1alpha1/watch/runtimeclasses"
        		,[
        		]
        	)
        	, 'watchNodeV1alpha1RuntimeClassList'
        );
    }

    /**
     * watch changes to an object of kind RuntimeClass. deprecated: use the 'watch'
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
        		"/apis/node.k8s.io/v1alpha1/watch/runtimeclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchNodeV1alpha1RuntimeClass'
        );
    }

    /**
     * list or watch objects of kind RuntimeClass
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
     * @return RuntimeClassListV1beta1|mixed
     */
    public function listNodeV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listNodeV1beta1RuntimeClass'
        );
    }

    /**
     * create a RuntimeClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheRuntimeClassV1beta1 $Model
     * @param array $queries
     * @return TheRuntimeClassV1beta1|mixed
     */
    public function createNodeV1beta1(\Kubernetes\Model\Io\K8s\Api\Node\V1beta1\RuntimeClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createNodeV1beta1RuntimeClass'
        );
    }

    /**
     * delete collection of RuntimeClass
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionNodeV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNodeV1beta1CollectionRuntimeClass'
        );
    }

    /**
     * read the specified RuntimeClass
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheRuntimeClassV1beta1|mixed
     */
    public function readNodeV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readNodeV1beta1RuntimeClass'
        );
    }

    /**
     * replace the specified RuntimeClass
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheRuntimeClassV1beta1 $Model
     * @param array $queries
     * @return TheRuntimeClassV1beta1|mixed
     */
    public function replaceNodeV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Node\V1beta1\RuntimeClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceNodeV1beta1RuntimeClass'
        );
    }

    /**
     * delete a RuntimeClass
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
    public function deleteNodeV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteNodeV1beta1RuntimeClass'
        );
    }

    /**
     * partially update the specified RuntimeClass
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
     * @return TheRuntimeClassV1beta1|mixed
     */
    public function patchNodeV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/node.k8s.io/v1beta1/runtimeclasses/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchNodeV1beta1RuntimeClass'
        );
    }

    /**
     * watch individual changes to a list of RuntimeClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListNodeV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1beta1/watch/runtimeclasses"
        		,[
        		]
        	)
        	, 'watchNodeV1beta1RuntimeClassList'
        );
    }

    /**
     * watch changes to an object of kind RuntimeClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchNodeV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/node.k8s.io/v1beta1/watch/runtimeclasses/{$name}"
        		,[
        		]
        	)
        	, 'watchNodeV1beta1RuntimeClass'
        );
    }


}

