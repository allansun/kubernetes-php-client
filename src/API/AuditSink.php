<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1\AuditSinkList as AuditSinkList;
use \Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1\AuditSink as TheAuditSink;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class AuditSink extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind AuditSink
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return AuditSinkList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * create an AuditSink
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param TheAuditSink $Model
     * @param array $queries
     * @return TheAuditSink|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1\AuditSink $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * delete collection of AuditSink
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
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
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteAuditregistrationV1alpha1CollectionAuditSink'
        );
    }

    /**
     * read the specified AuditSink
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheAuditSink|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * replace the specified AuditSink
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheAuditSink $Model
     * @param array $queries
     * @return TheAuditSink|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1\AuditSink $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * delete an AuditSink
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
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * partially update the specified AuditSink
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheAuditSink|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchAuditregistrationV1alpha1AuditSink'
        );
    }

    /**
     * watch individual changes to a list of AuditSink. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/auditregistration.k8s.io/v1alpha1/watch/auditsinks"
        		,[
        		]
        	)
        	, 'watchAuditregistrationV1alpha1AuditSinkList'
        );
    }

    /**
     * watch changes to an object of kind AuditSink. deprecated: use the 'watch'
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
        		"/apis/auditregistration.k8s.io/v1alpha1/watch/auditsinks/{$name}"
        		,[
        		]
        	)
        	, 'watchAuditregistrationV1alpha1AuditSink'
        );
    }


}

