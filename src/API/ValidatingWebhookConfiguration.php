<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\ValidatingWebhookConfigurationList as ValidatingWebhookConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\ValidatingWebhookConfiguration as TheValidatingWebhookConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfigurationList as ValidatingWebhookConfigurationListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration as TheValidatingWebhookConfigurationV1beta1;

class ValidatingWebhookConfiguration extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind ValidatingWebhookConfiguration
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
     * @return ValidatingWebhookConfigurationList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * create a ValidatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheValidatingWebhookConfiguration $Model
     * @param array $queries
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\ValidatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of ValidatingWebhookConfiguration
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
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1CollectionValidatingWebhookConfiguration'
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
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * replace the specified ValidatingWebhookConfiguration
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheValidatingWebhookConfiguration $Model
     * @param array $queries
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1\ValidatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete a ValidatingWebhookConfiguration
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
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * partially update the specified ValidatingWebhookConfiguration
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
     * @return TheValidatingWebhookConfiguration|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of ValidatingWebhookConfiguration.
     * deprecated: use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/watch/validatingwebhookconfigurations"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1ValidatingWebhookConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingWebhookConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead, filtered to a single
     * item with the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1/watch/validatingwebhookconfigurations/{$name}"
        		,[
        		]
        	)
        	, 'watchAdmissionregistrationV1ValidatingWebhookConfiguration'
        );
    }

    /**
     * list or watch objects of kind ValidatingWebhookConfiguration
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
     * @return ValidatingWebhookConfigurationListV1beta1|mixed
     */
    public function listAdmissionregistrationV1beta1(array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheValidatingWebhookConfigurationV1beta1 $Model
     * @param array $queries
     * @return TheValidatingWebhookConfigurationV1beta1|mixed
     */
    public function createAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete collection of ValidatingWebhookConfiguration
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
    public function deleteCollectionAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * @return TheValidatingWebhookConfigurationV1beta1|mixed
     */
    public function readAdmissionregistrationV1beta1($name, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheValidatingWebhookConfigurationV1beta1 $Model
     * @param array $queries
     * @return TheValidatingWebhookConfigurationV1beta1|mixed
     */
    public function replaceAdmissionregistrationV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingWebhookConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * delete a ValidatingWebhookConfiguration
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
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheValidatingWebhookConfigurationV1beta1|mixed
     */
    public function patchAdmissionregistrationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingwebhookconfigurations/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAdmissionregistrationV1beta1ValidatingWebhookConfiguration'
        );
    }

    /**
     * watch individual changes to a list of ValidatingWebhookConfiguration.
     * deprecated: use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListAdmissionregistrationV1beta1()
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
     * watch changes to an object of kind ValidatingWebhookConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead, filtered to a single
     * item with the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchAdmissionregistrationV1beta1($name)
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

