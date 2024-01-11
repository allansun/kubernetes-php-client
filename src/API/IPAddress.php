<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1\IPAddressList as IPAddressList;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1\IPAddress as TheIPAddress;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class IPAddress extends AbstractAPI
{
    /**
     * list or watch objects of kind IPAddress
     *
     * @return IPAddressList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses",
        		[
        		]
        	),
        	'listNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * create an IPAddress
     *
     * @param TheIPAddress $Model
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
     * @return TheIPAddress|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1\IPAddress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * delete collection of IPAddress
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
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1alpha1CollectionIPAddress'
        );
    }

    /**
     * read the specified IPAddress
     *
     * @param string $name name of the IPAddress
     * @return TheIPAddress|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses/{$name}",
        		[
        		]
        	),
        	'readNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * replace the specified IPAddress
     *
     * @param string $name name of the IPAddress
     * @param TheIPAddress $Model
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
     * @return TheIPAddress|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1\IPAddress $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * delete an IPAddress
     *
     * @param string $name name of the IPAddress
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
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * partially update the specified IPAddress
     *
     * @param string $name name of the IPAddress
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
     * @return TheIPAddress|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1alpha1/ipaddresses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1alpha1IPAddress'
        );
    }

    /**
     * watch individual changes to a list of IPAddress. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1alpha1/watch/ipaddresses",
        		[
        		]
        	),
        	'watchNetworkingV1alpha1IPAddressList'
        );
    }

    /**
     * watch changes to an object of kind IPAddress. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the IPAddress
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1alpha1/watch/ipaddresses/{$name}",
        		[
        		]
        	),
        	'watchNetworkingV1alpha1IPAddress'
        );
    }
}

