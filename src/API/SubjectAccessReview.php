<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SubjectAccessReview as TheSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SubjectAccessReview as TheSubjectAccessReviewV1beta1;

class SubjectAccessReview extends AbstractAPI
{

    /**
     * create a SubjectAccessReview
     *
     * @param TheSubjectAccessReview $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'includeUninitialized'	boolean
     * If IncludeUninitialized is specified, the object may be returned without
     * completing initialization.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheSubjectAccessReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authorization\V1\SubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/subjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1SubjectAccessReview'
        );
    }

    /**
     * create a SubjectAccessReview
     *
     * @param TheSubjectAccessReviewV1beta1 $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'includeUninitialized'	boolean
     * If IncludeUninitialized is specified, the object may be returned without
     * completing initialization.
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/subjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1beta1SubjectAccessReview'
        );
    }


}

