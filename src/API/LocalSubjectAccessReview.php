<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview as TheLocalSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\LocalSubjectAccessReview as TheLocalSubjectAccessReviewV1beta1;

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

    /**
     * create a LocalSubjectAccessReview
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param TheLocalSubjectAccessReviewV1beta1 $Model
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
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheLocalSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(string $namespace, \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\LocalSubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/namespaces/{$namespace}/localsubjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1beta1NamespacedLocalSubjectAccessReview'
        );
    }


}

