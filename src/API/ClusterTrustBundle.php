<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1alpha1\ClusterTrustBundleList as ClusterTrustBundleList;
use \Kubernetes\Model\Io\K8s\Api\Certificates\V1alpha1\ClusterTrustBundle as TheClusterTrustBundle;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ClusterTrustBundle extends AbstractAPI
{
    /**
     * list or watch objects of kind ClusterTrustBundle
     *
     * @return ClusterTrustBundleList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles",
        		[
        		]
        	),
        	'listCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * create a ClusterTrustBundle
     *
     * @param TheClusterTrustBundle $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheClusterTrustBundle|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Certificates\V1alpha1\ClusterTrustBundle $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * delete collection of ClusterTrustBundle
     *
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCertificatesV1alpha1CollectionClusterTrustBundle'
        );
    }

    /**
     * read the specified ClusterTrustBundle
     *
     * @param string $name name of the ClusterTrustBundle
     * @return TheClusterTrustBundle|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles/{$name}",
        		[
        		]
        	),
        	'readCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * replace the specified ClusterTrustBundle
     *
     * @param string $name name of the ClusterTrustBundle
     * @param TheClusterTrustBundle $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheClusterTrustBundle|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Certificates\V1alpha1\ClusterTrustBundle $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * delete a ClusterTrustBundle
     *
     * @param string $name name of the ClusterTrustBundle
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * partially update the specified ClusterTrustBundle
     *
     * @param string $name name of the ClusterTrustBundle
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheClusterTrustBundle|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/certificates.k8s.io/v1alpha1/clustertrustbundles/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCertificatesV1alpha1ClusterTrustBundle'
        );
    }

    /**
     * watch individual changes to a list of ClusterTrustBundle. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1alpha1/watch/clustertrustbundles",
        		[
        		]
        	),
        	'watchCertificatesV1alpha1ClusterTrustBundleList'
        );
    }

    /**
     * watch changes to an object of kind ClusterTrustBundle. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the ClusterTrustBundle
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/certificates.k8s.io/v1alpha1/watch/clustertrustbundles/{$name}",
        		[
        		]
        	),
        	'watchCertificatesV1alpha1ClusterTrustBundle'
        );
    }
}

