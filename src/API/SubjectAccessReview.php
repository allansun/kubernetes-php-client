<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SubjectAccessReview as SubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SubjectAccessReview as SubjectAccessReview;

class SubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SubjectAccessReview
     *
     * @param SubjectAccessReview $Model
     * @return SubjectAccessReview|mixed
     */
    public function create(\SubjectAccessReview $Model)
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
     * @param SubjectAccessReview $Model
     * @return SubjectAccessReview|mixed
     */
    public function createAuthorizationV1beta1(\SubjectAccessReview $Model)
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

