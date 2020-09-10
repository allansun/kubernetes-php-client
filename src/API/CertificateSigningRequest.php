<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequestList as CertificateSigningRequestList;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequest as TheCertificateSigningRequest;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequestList as CertificateSigningRequestListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest as TheCertificateSigningRequestV1beta1;

class CertificateSigningRequest extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind CertificateSigningRequest
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CertificateSigningRequestList|mixed
     */
    public function list(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * create a CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * delete collection of CertificateSigningRequest
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
     * @configkey resourceVersionMatch	string
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
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCertificatesV1CollectionCertificateSigningRequest'
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
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * replace the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function replace($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1CertificateSigningRequest'
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
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * partially update the specified CertificateSigningRequest
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
     * @return TheCertificateSigningRequest|mixed
     */
    public function patch($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * read approval of the specified CertificateSigningRequest
     *
     * @param $name
     * @return TheCertificateSigningRequest|mixed
     */
    public function readApproval($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/approval"
        		,[
        		]
        	)
        	, 'readCertificatesV1CertificateSigningRequestApproval'
        );
    }

    /**
     * replace approval of the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function replaceApproval($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/approval"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1CertificateSigningRequestApproval'
        );
    }

    /**
     * partially update approval of the specified CertificateSigningRequest
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
     * @return TheCertificateSigningRequest|mixed
     */
    public function patchApproval($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/approval"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1CertificateSigningRequestApproval'
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
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/status"
        		,[
        		]
        	)
        	, 'readCertificatesV1CertificateSigningRequestStatus'
        );
    }

    /**
     * replace status of the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequest $Model
     * @param array $queries
     * @return TheCertificateSigningRequest|mixed
     */
    public function replaceStatus($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1CertificateSigningRequestStatus'
        );
    }

    /**
     * partially update status of the specified CertificateSigningRequest
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
     * @return TheCertificateSigningRequest|mixed
     */
    public function patchStatus($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1/certificatesigningrequests/{$name}/status"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1CertificateSigningRequestStatus'
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
        		"/apis/certificates.k8s.io/v1/watch/certificatesigningrequests"
        		,[
        		]
        	)
        	, 'watchCertificatesV1CertificateSigningRequestList'
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
        		"/apis/certificates.k8s.io/v1/watch/certificatesigningrequests/{$name}"
        		,[
        		]
        	)
        	, 'watchCertificatesV1CertificateSigningRequest'
        );
    }

    /**
     * list or watch objects of kind CertificateSigningRequest
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return CertificateSigningRequestListV1beta1|mixed
     */
    public function listCertificatesV1beta1(array $queries = [])
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
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheCertificateSigningRequestV1beta1 $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function createCertificatesV1beta1(\Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
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
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey resourceVersionMatch	string
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
     * @configkey resourceVersionMatch	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionCertificatesV1beta1(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests"
        		,[
        			'json' => $Model->getArrayCopy(),
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
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function readCertificatesV1beta1($name, array $queries = [])
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
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequestV1beta1 $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function replaceCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
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
    public function deleteCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
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
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function patchCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
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
     * read approval of the specified CertificateSigningRequest
     *
     * @param $name
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function readApprovalCertificatesV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/approval"
        		,[
        		]
        	)
        	, 'readCertificatesV1beta1CertificateSigningRequestApproval'
        );
    }

    /**
     * replace approval of the specified CertificateSigningRequest
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequestV1beta1 $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function replaceApprovalCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/approval"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceCertificatesV1beta1CertificateSigningRequestApproval'
        );
    }

    /**
     * partially update approval of the specified CertificateSigningRequest
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
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function patchApprovalCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{$name}/approval"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchCertificatesV1beta1CertificateSigningRequestApproval'
        );
    }

    /**
     * read status of the specified CertificateSigningRequest
     *
     * @param $name
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function readStatusCertificatesV1beta1($name)
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
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheCertificateSigningRequestV1beta1 $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function replaceStatusCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1beta1\CertificateSigningRequest $Model, array $queries = [])
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
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheCertificateSigningRequestV1beta1|mixed
     */
    public function patchStatusCertificatesV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
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
    public function watchListCertificatesV1beta1()
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
    public function watchCertificatesV1beta1($name)
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

