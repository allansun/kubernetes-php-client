<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenReview as TokenReview;
use \Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1\TokenReview as TokenReview;

class TokenReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a TokenReview
     *
     * @param TokenReview $Model
     * @return TokenReview|mixed
     */
    public function create(\TokenReview $Model)
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
     * @param TokenReview $Model
     * @return TokenReview|mixed
     */
    public function createAuthenticationV1beta1(\TokenReview $Model)
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

