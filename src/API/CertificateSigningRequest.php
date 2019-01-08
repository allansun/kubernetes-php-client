<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequestList as CertificateSigningRequestList;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest as TheCertificateSigningRequest;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class CertificateSigningRequest extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind CertificateSigningRequest
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
     * @return CertificateSigningRequestList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * create a CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * delete collection of CertificateSigningRequest
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
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCertificatesV1beta1CollectionCertificateSigningRequest'
        );
    }

    /**
     * read the specified CertificateSigningRequest
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function read($name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * replace the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * delete a CertificateSigningRequest
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
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * partially update the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1beta1CertificateSigningRequest'
        );
    }

    /**
     * replace approval of the specified CertificateSigningRequest
     *
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @return TheCertificateSigningRequest|mixed
     */
    public function replaceApproval($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/approval"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCertificatesV1beta1CertificateSigningRequestApproval'
        );
    }

    /**
     * read status of the specified CertificateSigningRequest
     *
     * @param $name
     * @return TheCertificateSigningRequest|mixed
     */
    public function readStatus($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/status"
        		,[
        		]
        	)
        	, 'readCertificatesV1beta1CertificateSigningRequestStatus'
        );
    }

    /**
     * replace status of the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1beta1CertificateSigningRequestStatus'
        );
    }

    /**
     * partially update status of the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey dryRun	string
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1beta1CertificateSigningRequestStatus'
        );
    }

    /**
     * watch individual changes to a list of CertificateSigningRequest. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests"
        		,[
        		]
        	)
        	, 'watchCertificatesV1beta1CertificateSigningRequestList'
        );
    }

    /**
     * watch changes to an object of kind CertificateSigningRequest. deprecated: use
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
        		"/apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests/{$name}"
        		,[
        		]
        	)
        	, 'watchCertificatesV1beta1CertificateSigningRequest'
        );
    }


}

