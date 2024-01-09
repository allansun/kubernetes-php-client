<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicyList as ValidatingAdmissionPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicy as TheValidatingAdmissionPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicyList as ValidatingAdmissionPolicyListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicy as TheValidatingAdmissionPolicyV1beta1;

class ValidatingAdmissionPolicy extends AbstractAPI
{
    /**
     * list or watch objects of kind ValidatingAdmissionPolicy
     *
     * @return ValidatingAdmissionPolicyList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies",
        		[
        		]
        	),
        	'listAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * create a ValidatingAdmissionPolicy
     *
     * @param TheValidatingAdmissionPolicy $Model
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
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * delete collection of ValidatingAdmissionPolicy
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1alpha1CollectionValidatingAdmissionPolicy'
        );
    }

    /**
     * read the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}",
        		[
        		]
        	),
        	'readAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * replace the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @param TheValidatingAdmissionPolicy $Model
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
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * delete a ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * partially update the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
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
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * read status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}/status",
        		[
        		]
        	),
        	'readAdmissionregistrationV1alpha1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * replace status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @param TheValidatingAdmissionPolicy $Model
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
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1alpha1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * partially update status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
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
     * @return TheValidatingAdmissionPolicy|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicies/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1alpha1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * watch individual changes to a list of ValidatingAdmissionPolicy. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/validatingadmissionpolicies",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1alpha1ValidatingAdmissionPolicyList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingAdmissionPolicy. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/validatingadmissionpolicies/{$name}",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1alpha1ValidatingAdmissionPolicy'
        );
    }

    /**
     * list or watch objects of kind ValidatingAdmissionPolicy
     *
     * @return ValidatingAdmissionPolicyListV1beta1|mixed
     */
    public function listAdmissionregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies",
        		[
        		]
        	),
        	'listAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * create a ValidatingAdmissionPolicy
     *
     * @param TheValidatingAdmissionPolicyV1beta1 $Model
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
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function createAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * delete collection of ValidatingAdmissionPolicy
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
    public function deleteCollectionAdmissionregistrationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1beta1CollectionValidatingAdmissionPolicy'
        );
    }

    /**
     * read the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function readAdmissionregistrationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}",
        		[
        		]
        	),
        	'readAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * replace the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @param TheValidatingAdmissionPolicyV1beta1 $Model
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
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function replaceAdmissionregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * delete a ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteAdmissionregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * partially update the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
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
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function patchAdmissionregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }

    /**
     * read status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function readStatusAdmissionregistrationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}/status",
        		[
        		]
        	),
        	'readAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * replace status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @param TheValidatingAdmissionPolicyV1beta1 $Model
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
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function replaceStatusAdmissionregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * partially update status of the specified ValidatingAdmissionPolicy
     *
     * @param string $name name of the ValidatingAdmissionPolicy
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
     * @return TheValidatingAdmissionPolicyV1beta1|mixed
     */
    public function patchStatusAdmissionregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicies/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus'
        );
    }

    /**
     * watch individual changes to a list of ValidatingAdmissionPolicy. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListAdmissionregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingadmissionpolicies",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingAdmissionPolicy. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param string $name name of the ValidatingAdmissionPolicy
     * @return WatchEvent|mixed
     */
    public function watchAdmissionregistrationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingadmissionpolicies/{$name}",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicy'
        );
    }
}

