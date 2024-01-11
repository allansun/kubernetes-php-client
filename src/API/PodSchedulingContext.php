<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\PodSchedulingContextList as PodSchedulingContextList;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\PodSchedulingContext as ThePodSchedulingContext;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodSchedulingContext extends AbstractAPI
{
    /**
     * list or watch objects of kind PodSchedulingContext
     *
     * @return PodSchedulingContextList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts",
        		[
        		]
        	),
        	'listResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * create a PodSchedulingContext
     *
     * @param ThePodSchedulingContext $Model
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
     * @return ThePodSchedulingContext|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\PodSchedulingContext $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * delete collection of PodSchedulingContext
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
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha2CollectionNamespacedPodSchedulingContext'
        );
    }

    /**
     * read the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
     * @return ThePodSchedulingContext|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}",
        		[
        		]
        	),
        	'readResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * replace the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
     * @param ThePodSchedulingContext $Model
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
     * @return ThePodSchedulingContext|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\PodSchedulingContext $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * delete a PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return ThePodSchedulingContext|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * partially update the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
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
     * @return ThePodSchedulingContext|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * read status of the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
     * @return ThePodSchedulingContext|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}/status",
        		[
        		]
        	),
        	'readResourceV1alpha2NamespacedPodSchedulingContextStatus'
        );
    }

    /**
     * replace status of the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
     * @param ThePodSchedulingContext $Model
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
     * @return ThePodSchedulingContext|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\PodSchedulingContext $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha2NamespacedPodSchedulingContextStatus'
        );
    }

    /**
     * partially update status of the specified PodSchedulingContext
     *
     * @param string $name name of the PodSchedulingContext
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
     * @return ThePodSchedulingContext|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/podschedulingcontexts/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha2NamespacedPodSchedulingContextStatus'
        );
    }

    /**
     * list or watch objects of kind PodSchedulingContext
     *
     * @return PodSchedulingContextList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/podschedulingcontexts",
        		[
        		]
        	),
        	'listResourceV1alpha2PodSchedulingContextForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodSchedulingContext. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/namespaces/{namespace}/podschedulingcontexts",
        		[
        		]
        	),
        	'watchResourceV1alpha2NamespacedPodSchedulingContextList'
        );
    }

    /**
     * watch changes to an object of kind PodSchedulingContext. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the PodSchedulingContext
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/namespaces/{namespace}/podschedulingcontexts/{$name}",
        		[
        		]
        	),
        	'watchResourceV1alpha2NamespacedPodSchedulingContext'
        );
    }

    /**
     * watch individual changes to a list of PodSchedulingContext. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/podschedulingcontexts",
        		[
        		]
        	),
        	'watchResourceV1alpha2PodSchedulingContextListForAllNamespaces'
        );
    }
}

