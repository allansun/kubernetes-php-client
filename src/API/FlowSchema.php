<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\FlowSchemaList as FlowSchemaList;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\FlowSchema as TheFlowSchema;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class FlowSchema extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind FlowSchema
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
     * @return FlowSchemaList|mixed
     */
    public function listFlowcontrolApiserverV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * create a FlowSchema
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheFlowSchema $Model
     * @param array $queries
     * @return TheFlowSchema|mixed
     */
    public function createFlowcontrolApiserverV1alpha1(\Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * delete collection of FlowSchema
     *
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
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
     * @configkey watch	boolean
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteFlowcontrolApiserverV1alpha1Collection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteFlowcontrolApiserverV1alpha1CollectionFlowSchema'
        );
    }

    /**
     * read the specified FlowSchema
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheFlowSchema|mixed
     */
    public function readFlowcontrolApiserverV1alpha1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * replace the specified FlowSchema
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheFlowSchema $Model
     * @param array $queries
     * @return TheFlowSchema|mixed
     */
    public function replaceFlowcontrolApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * delete a FlowSchema
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
    public function deleteFlowcontrolApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * partially update the specified FlowSchema
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
     * @return TheFlowSchema|mixed
     */
    public function patchFlowcontrolApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }

    /**
     * read status of the specified FlowSchema
     *
     * @param $name
     * @return TheFlowSchema|mixed
     */
    public function readFlowcontrolApiserverV1alpha1Status($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}/status"
        		,[
        		]
        	)
        	, 'readFlowcontrolApiserverV1alpha1FlowSchemaStatus'
        );
    }

    /**
     * replace status of the specified FlowSchema
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheFlowSchema $Model
     * @param array $queries
     * @return TheFlowSchema|mixed
     */
    public function replaceFlowcontrolApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceFlowcontrolApiserverV1alpha1FlowSchemaStatus'
        );
    }

    /**
     * partially update status of the specified FlowSchema
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
     * @return TheFlowSchema|mixed
     */
    public function patchFlowcontrolApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchFlowcontrolApiserverV1alpha1FlowSchemaStatus'
        );
    }

    /**
     * watch individual changes to a list of FlowSchema. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/flowschemas"
        		,[
        		]
        	)
        	, 'watchFlowcontrolApiserverV1alpha1FlowSchemaList'
        );
    }

    /**
     * watch changes to an object of kind FlowSchema. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/flowschemas/{$name}"
        		,[
        		]
        	)
        	, 'watchFlowcontrolApiserverV1alpha1FlowSchema'
        );
    }


}

