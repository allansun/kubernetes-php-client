<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview as TheLocalSubjectAccessReview;

class LocalSubjectAccessReview extends AbstractAPI
{
    /**
     * create a LocalSubjectAccessReview
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheLocalSubjectAccessReview $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldManager'	string
     * fieldManager is a name associated with the actor or entity that is making these
     * changes. The value must be less than or 128 characters long, and only contain
     * printable characters, as defined by https://golang.org/pkg/unicode/#IsPrint.
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields, provided that the
     * `ServerSideFieldValidation` feature gate is also enabled. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23 and is the default
     * behavior when the `ServerSideFieldValidation` feature gate is disabled. - Warn:
     * This will send a warning via the standard warning response header for each
     * unknown field that is dropped from the object, and for each duplicate field that
     * is encountered. The request will still succeed if there are no other errors, and
     * will only persist the last of any duplicate fields. This is the default when the
     * `ServerSideFieldValidation` feature gate is enabled. - Strict: This will fail
     * the request with a BadRequest error if any unknown fields would be dropped from
     * the object, or if any duplicate fields are present. The error returned from the
     * server will contain all unknown and duplicate fields encountered.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheLocalSubjectAccessReview|mixed
     */
    public function create(string $namespace, \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/namespaces/{$namespace}/localsubjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1NamespacedLocalSubjectAccessReview'
        );
    }
}

