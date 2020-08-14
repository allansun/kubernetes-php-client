<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\PriorityLevelConfigurationList as PriorityLevelConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\PriorityLevelConfiguration as ThePriorityLevelConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PriorityLevelConfiguration extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind PriorityLevelConfiguration
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
     * @return PriorityLevelConfigurationList|mixed
     */
    public function listFlowcontrolApiserverV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * create a PriorityLevelConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param ThePriorityLevelConfiguration $Model
     * @param array $queries
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function createFlowcontrolApiserverV1alpha1(\Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * delete collection of PriorityLevelConfiguration
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
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteFlowcontrolApiserverV1alpha1CollectionPriorityLevelConfiguration'
        );
    }

    /**
     * read the specified PriorityLevelConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function readFlowcontrolApiserverV1alpha1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * replace the specified PriorityLevelConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePriorityLevelConfiguration $Model
     * @param array $queries
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function replaceFlowcontrolApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * delete a PriorityLevelConfiguration
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
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * partially update the specified PriorityLevelConfiguration
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function patchFlowcontrolApiserverV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }

    /**
     * read status of the specified PriorityLevelConfiguration
     *
     * @param $name
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function readFlowcontrolApiserverV1alpha1Status($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}/status"
        		,[
        		]
        	)
        	, 'readFlowcontrolApiserverV1alpha1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * replace status of the specified PriorityLevelConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param ThePriorityLevelConfiguration $Model
     * @param array $queries
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function replaceFlowcontrolApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceFlowcontrolApiserverV1alpha1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * partially update status of the specified PriorityLevelConfiguration
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function patchFlowcontrolApiserverV1alpha1Status($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/prioritylevelconfigurations/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchFlowcontrolApiserverV1alpha1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * watch individual changes to a list of PriorityLevelConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/prioritylevelconfigurations"
        		,[
        		]
        	)
        	, 'watchFlowcontrolApiserverV1alpha1PriorityLevelConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind PriorityLevelConfiguration. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/prioritylevelconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchFlowcontrolApiserverV1alpha1PriorityLevelConfiguration'
        );
    }


}

