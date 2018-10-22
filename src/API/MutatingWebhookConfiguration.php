<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfigurationList as MutatingWebhookConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration as TheMutatingWebhookConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class MutatingWebhookConfiguration extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind MutatingWebhookConfiguration
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
     * @param array $queries
     * @return MutatingWebhookConfigurationList|mixed
     */
    public function list(array $queries = [])
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
     * @param TheMutatingWebhookConfiguration $Model
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAdmissionregistrationV1beta1MutatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of MutatingWebhookConfiguration
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
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations"
        		,[
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
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function read($name, array $queries = [])
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
     * @param $name
     * @param TheMutatingWebhookConfiguration $Model
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\MutatingWebhookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
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
    public function delete($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @param $name
     * @param Patch $Model
     * @return TheMutatingWebhookConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/mutatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
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
    public function watchList()
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
    public function watch($name)
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

