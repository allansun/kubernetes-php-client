<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SubjectAccessReview as TheSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SubjectAccessReview as TheSubjectAccessReviewV1beta1;

class SubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SubjectAccessReview
     *
     * @param TheSubjectAccessReview $Model
     * @return TheSubjectAccessReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authorization\V1\SubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/subjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1SubjectAccessReview'
        );
    }

    /**
     * create a SubjectAccessReview
     *
     * @param TheSubjectAccessReviewV1beta1 $Model
     * @return TheSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/subjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1beta1SubjectAccessReview'
        );
    }


}

