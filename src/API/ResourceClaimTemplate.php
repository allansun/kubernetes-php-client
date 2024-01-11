<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\ResourceClaimTemplateList as ResourceClaimTemplateList;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\ResourceClaimTemplate as TheResourceClaimTemplate;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class ResourceClaimTemplate extends AbstractAPI
{
    /**
     * list or watch objects of kind ResourceClaimTemplate
     *
     * @return ResourceClaimTemplateList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates",
        		[
        		]
        	),
        	'listResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * create a ResourceClaimTemplate
     *
     * @param TheResourceClaimTemplate $Model
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
     * @return TheResourceClaimTemplate|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\ResourceClaimTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * delete collection of ResourceClaimTemplate
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
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha2CollectionNamespacedResourceClaimTemplate'
        );
    }

    /**
     * read the specified ResourceClaimTemplate
     *
     * @param string $name name of the ResourceClaimTemplate
     * @return TheResourceClaimTemplate|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates/{$name}",
        		[
        		]
        	),
        	'readResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * replace the specified ResourceClaimTemplate
     *
     * @param string $name name of the ResourceClaimTemplate
     * @param TheResourceClaimTemplate $Model
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
     * @return TheResourceClaimTemplate|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha2\ResourceClaimTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * delete a ResourceClaimTemplate
     *
     * @param string $name name of the ResourceClaimTemplate
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceClaimTemplate|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * partially update the specified ResourceClaimTemplate
     *
     * @param string $name name of the ResourceClaimTemplate
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
     * @return TheResourceClaimTemplate|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha2/namespaces/{namespace}/resourceclaimtemplates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * list or watch objects of kind ResourceClaimTemplate
     *
     * @return ResourceClaimTemplateList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/resourceclaimtemplates",
        		[
        		]
        	),
        	'listResourceV1alpha2ResourceClaimTemplateForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaimTemplate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/namespaces/{namespace}/resourceclaimtemplates",
        		[
        		]
        	),
        	'watchResourceV1alpha2NamespacedResourceClaimTemplateList'
        );
    }

    /**
     * watch changes to an object of kind ResourceClaimTemplate. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceClaimTemplate
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/namespaces/{namespace}/resourceclaimtemplates/{$name}",
        		[
        		]
        	),
        	'watchResourceV1alpha2NamespacedResourceClaimTemplate'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaimTemplate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha2/watch/resourceclaimtemplates",
        		[
        		]
        	),
        	'watchResourceV1alpha2ResourceClaimTemplateListForAllNamespaces'
        );
    }
}

