<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttributesClassList as VolumeAttributesClassList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttributesClass as TheVolumeAttributesClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class VolumeAttributesClass extends AbstractAPI
{
    /**
     * list or watch objects of kind VolumeAttributesClass
     *
     * @return VolumeAttributesClassList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses",
        		[
        		]
        	),
        	'listStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * create a VolumeAttributesClass
     *
     * @param TheVolumeAttributesClass $Model
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
     * @return TheVolumeAttributesClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttributesClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * delete collection of VolumeAttributesClass
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
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteStorageV1alpha1CollectionVolumeAttributesClass'
        );
    }

    /**
     * read the specified VolumeAttributesClass
     *
     * @param string $name name of the VolumeAttributesClass
     * @return TheVolumeAttributesClass|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses/{$name}",
        		[
        		]
        	),
        	'readStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * replace the specified VolumeAttributesClass
     *
     * @param string $name name of the VolumeAttributesClass
     * @param TheVolumeAttributesClass $Model
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
     * @return TheVolumeAttributesClass|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttributesClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * delete a VolumeAttributesClass
     *
     * @param string $name name of the VolumeAttributesClass
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheVolumeAttributesClass|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * partially update the specified VolumeAttributesClass
     *
     * @param string $name name of the VolumeAttributesClass
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
     * @return TheVolumeAttributesClass|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1alpha1/volumeattributesclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchStorageV1alpha1VolumeAttributesClass'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttributesClass. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattributesclasses",
        		[
        		]
        	),
        	'watchStorageV1alpha1VolumeAttributesClassList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttributesClass. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the VolumeAttributesClass
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattributesclasses/{$name}",
        		[
        		]
        	),
        	'watchStorageV1alpha1VolumeAttributesClass'
        );
    }
}

