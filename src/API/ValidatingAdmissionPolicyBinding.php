<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicyBindingList as ValidatingAdmissionPolicyBindingList;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicyBinding as TheValidatingAdmissionPolicyBinding;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicyBindingList as ValidatingAdmissionPolicyBindingListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicyBinding as TheValidatingAdmissionPolicyBindingV1beta1;

class ValidatingAdmissionPolicyBinding extends AbstractAPI
{
    /**
     * list or watch objects of kind ValidatingAdmissionPolicyBinding
     *
     * @return ValidatingAdmissionPolicyBindingList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings",
        		[
        		]
        	),
        	'listAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * create a ValidatingAdmissionPolicyBinding
     *
     * @param TheValidatingAdmissionPolicyBinding $Model
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
     * @return TheValidatingAdmissionPolicyBinding|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicyBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * delete collection of ValidatingAdmissionPolicyBinding
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1alpha1CollectionValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * read the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @return TheValidatingAdmissionPolicyBinding|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings/{$name}",
        		[
        		]
        	),
        	'readAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * replace the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @param TheValidatingAdmissionPolicyBinding $Model
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
     * @return TheValidatingAdmissionPolicyBinding|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1\ValidatingAdmissionPolicyBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * delete a ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
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
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * partially update the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
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
     * @return TheValidatingAdmissionPolicyBinding|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1alpha1/validatingadmissionpolicybindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * watch individual changes to a list of ValidatingAdmissionPolicyBinding.
     * deprecated: use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/validatingadmissionpolicybindings",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBindingList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingAdmissionPolicyBinding. deprecated:
     * use the 'watch' parameter with a list operation instead, filtered to a single
     * item with the 'fieldSelector' parameter.
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1alpha1/watch/validatingadmissionpolicybindings/{$name}",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1alpha1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * list or watch objects of kind ValidatingAdmissionPolicyBinding
     *
     * @return ValidatingAdmissionPolicyBindingListV1beta1|mixed
     */
    public function listAdmissionregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings",
        		[
        		]
        	),
        	'listAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * create a ValidatingAdmissionPolicyBinding
     *
     * @param TheValidatingAdmissionPolicyBindingV1beta1 $Model
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
     * @return TheValidatingAdmissionPolicyBindingV1beta1|mixed
     */
    public function createAdmissionregistrationV1beta1(\Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicyBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * delete collection of ValidatingAdmissionPolicyBinding
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
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1beta1CollectionValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * read the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @return TheValidatingAdmissionPolicyBindingV1beta1|mixed
     */
    public function readAdmissionregistrationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings/{$name}",
        		[
        		]
        	),
        	'readAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * replace the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @param TheValidatingAdmissionPolicyBindingV1beta1 $Model
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
     * @return TheValidatingAdmissionPolicyBindingV1beta1|mixed
     */
    public function replaceAdmissionregistrationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1\ValidatingAdmissionPolicyBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * delete a ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
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
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * partially update the specified ValidatingAdmissionPolicyBinding
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
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
     * @return TheValidatingAdmissionPolicyBindingV1beta1|mixed
     */
    public function patchAdmissionregistrationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/admissionregistration.k8s.io/v1beta1/validatingadmissionpolicybindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }

    /**
     * watch individual changes to a list of ValidatingAdmissionPolicyBinding.
     * deprecated: use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListAdmissionregistrationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingadmissionpolicybindings",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBindingList'
        );
    }

    /**
     * watch changes to an object of kind ValidatingAdmissionPolicyBinding. deprecated:
     * use the 'watch' parameter with a list operation instead, filtered to a single
     * item with the 'fieldSelector' parameter.
     *
     * @param string $name name of the ValidatingAdmissionPolicyBinding
     * @return WatchEvent|mixed
     */
    public function watchAdmissionregistrationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/admissionregistration.k8s.io/v1beta1/watch/validatingadmissionpolicybindings/{$name}",
        		[
        		]
        	),
        	'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding'
        );
    }
}

