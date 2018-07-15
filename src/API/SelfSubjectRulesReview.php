<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectRulesReview as SelfSubjectRulesReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectRulesReview as SelfSubjectRulesReview;

class SelfSubjectRulesReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SelfSubjectRulesReview
     *
     * @param SelfSubjectRulesReview $Model
     * @return SelfSubjectRulesReview|mixed
     */
    public function create(\SelfSubjectRulesReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/selfsubjectrulesreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1SelfSubjectRulesReview'
        );
    }

    /**
     * create a SelfSubjectRulesReview
     *
     * @param SelfSubjectRulesReview $Model
     * @return SelfSubjectRulesReview|mixed
     */
    public function createAuthorizationV1beta1(\SelfSubjectRulesReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/selfsubjectrulesreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1beta1SelfSubjectRulesReview'
        );
    }


}

