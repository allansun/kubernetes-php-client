<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectAccessReview as TheSelfSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectAccessReview as TheSelfSubjectAccessReviewV1beta1;

class SelfSubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SelfSubjectAccessReview
     *
     * @param TheSelfSubjectAccessReview $Model
     * @return TheSelfSubjectAccessReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectAccessReview $Model)
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
     * @param TheSelfSubjectAccessReviewV1beta1 $Model
     * @return TheSelfSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectAccessReview $Model)
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

