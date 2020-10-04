<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenReview as TheTokenReview;
use \Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1\TokenReview as TheTokenReviewV1beta1;

class TokenReview extends AbstractAPI
{

    /**
     * create a TokenReview
     *
     * @param TheTokenReview $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheTokenReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authentication\V1\TokenReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authentication.k8s.io/v1/tokenreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthenticationV1TokenReview'
        );
    }

    /**
     * create a TokenReview
     *
     * @param TheTokenReviewV1beta1 $Model
     * @param array $queries options:
     * 'pretty'	string
     * If 'true', then the output is pretty printed.
     *
     * @return TheTokenReviewV1beta1|mixed
     */
    public function createAuthenticationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authentication\V1beta1\TokenReview $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authentication.k8s.io/v1beta1/tokenreviews",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAuthenticationV1beta1TokenReview'
        );
    }


}

