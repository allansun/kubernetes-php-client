<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectRulesReview as TheSelfSubjectRulesReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectRulesReview as TheSelfSubjectRulesReviewV1beta1;

class SelfSubjectRulesReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a SelfSubjectRulesReview
     *
     * @param TheSelfSubjectRulesReview $Model
     * @return TheSelfSubjectRulesReview|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Authorization\V1\SelfSubjectRulesReview $Model)
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
     * @param TheSelfSubjectRulesReviewV1beta1 $Model
     * @return TheSelfSubjectRulesReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\SelfSubjectRulesReview $Model)
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

