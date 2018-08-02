<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenReview as TheTokenReview;
use \Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1\TokenReview as TheTokenReviewV1beta1;

class TokenReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a TokenReview
     *
     * @param TheTokenReview $Model
     * @return TheTokenReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authentication.k8s.io/v1/tokenreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthenticationV1TokenReview'
        );
    }

    /**
     * create a TokenReview
     *
     * @param TheTokenReviewV1beta1 $Model
     * @return TheTokenReviewV1beta1|mixed
     */
    public function createAuthenticationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1\TokenReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authentication.k8s.io/v1beta1/tokenreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthenticationV1beta1TokenReview'
        );
    }


}

