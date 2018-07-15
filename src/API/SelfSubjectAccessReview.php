<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectAccessReview as SelfSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectAccessReview as SelfSubjectAccessReview;

class SelfSubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SelfSubjectAccessReview
     *
     * @param SelfSubjectAccessReview $Model
     * @return SelfSubjectAccessReview|mixed
     */
    public function create(\SelfSubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/selfsubjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1SelfSubjectAccessReview'
        );
    }

    /**
     * create a SelfSubjectAccessReview
     *
     * @param SelfSubjectAccessReview $Model
     * @return SelfSubjectAccessReview|mixed
     */
    public function createAuthorizationV1beta1(\SelfSubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/selfsubjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1beta1SelfSubjectAccessReview'
        );
    }


}

