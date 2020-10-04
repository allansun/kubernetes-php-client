<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectAccessReview as TheSelfSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectAccessReview as TheSelfSubjectAccessReviewV1beta1;

class SelfSubjectAccessReview extends AbstractAPI
{

    /**
     * create a SelfSubjectAccessReview
     *
     * @param TheSelfSubjectAccessReview $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheSelfSubjectAccessReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/selfsubjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1SelfSubjectAccessReview'
        );
    }

    /**
     * create a SelfSubjectAccessReview
     *
     * @param TheSelfSubjectAccessReviewV1beta1 $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheSelfSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectAccessReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/selfsubjectaccessreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthorizationV1beta1SelfSubjectAccessReview'
        );
    }


}

