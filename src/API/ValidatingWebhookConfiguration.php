<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfigurationList as ValidatingWebhookConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration as TheValidatingWebhookConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ValidatingWebhookConfiguration extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ValidatingWebhookConfiguration
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
     * @return ValidatingWebhookConfigurationList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * create a ValidatingWebhookConfiguration
     *
     * @param TheValidatingWebhookConfiguration $Model
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of ValidatingWebhookConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1beta1CollectionValidatingWebhookConfiguration'
        );
    }

    /**
     * read the specified ValidatingWebhookConfiguration
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * replace the specified ValidatingWebhookConfiguration
     *
     * @param $name
     * @param TheValidatingWebhookConfiguration $Model
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete a ValidatingWebhookConfiguration
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
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
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * partially update the specified ValidatingWebhookConfiguration
     *
     * @param $name
     * @param Patch $Model
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of ValidatingWebhookConfiguration
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingwebhookconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1beta1ValidatingWebhookConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingWebhookConfiguration
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingwebhookconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }


}

