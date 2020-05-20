<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\MutatingWebhookConfigurationList as MutatingWebhookConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\MutatingWebhookConfiguration as TheMutatingWebhookConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfigurationList as MutatingWebhookConfigurationListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration as TheMutatingWebhookConfigurationV1beta1;

class MutatingWebhookConfiguration extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind MutatingWebhookConfiguration
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
     * @return MutatingWebhookConfigurationList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * create a MutatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheMutatingWebhookConfiguration $Model
     * @param array $queries
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\MutatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of MutatingWebhookConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1CollectionMutatingWebhookConfiguration'
        );
    }

    /**
     * read the specified MutatingWebhookConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * replace the specified MutatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheMutatingWebhookConfiguration $Model
     * @param array $queries
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\MutatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * delete a MutatingWebhookConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * partially update the specified MutatingWebhookConfiguration
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
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of MutatingWebhookConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/watch/mutatingwebhookconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1MutatingWebhookConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind MutatingWebhookConfiguration. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/watch/mutatingwebhookconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1MutatingWebhookConfiguration'
        );
    }

    /**
     * list or watch objects of kind MutatingWebhookConfiguration
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
     * @return MutatingWebhookConfigurationListV1beta1|mixed
     */
    public function listAdmissionregistrationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * create a MutatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheMutatingWebhookConfigurationV1beta1 $Model
     * @param array $queries
     * @return TheMutatingWebhookConfigurationV1beta1|mixed
     */
    public function createAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of MutatingWebhookConfiguration
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
    public function deleteCollectionAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1beta1CollectionMutatingWebhookConfiguration'
        );
    }

    /**
     * read the specified MutatingWebhookConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheMutatingWebhookConfigurationV1beta1|mixed
     */
    public function readAdmissionregistrationV1beta1($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * replace the specified MutatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheMutatingWebhookConfigurationV1beta1 $Model
     * @param array $queries
     * @return TheMutatingWebhookConfigurationV1beta1|mixed
     */
    public function replaceAdmissionregistrationV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * delete a MutatingWebhookConfiguration
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
    public function deleteAdmissionregistrationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * partially update the specified MutatingWebhookConfiguration
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
     * @return TheMutatingWebhookConfigurationV1beta1|mixed
     */
    public function patchAdmissionregistrationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of MutatingWebhookConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListAdmissionregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/mutatingwebhookconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1beta1MutatingWebhookConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind MutatingWebhookConfiguration. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAdmissionregistrationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/mutatingwebhookconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }


}

