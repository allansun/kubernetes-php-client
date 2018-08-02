<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview as TheLocalSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\LocalSubjectAccessReview as TheLocalSubjectAccessReviewV1beta1;

class LocalSubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a LocalSubjectAccessReview
     *
     * @param $namespace
     * @param TheLocalSubjectAccessReview $Model
     * @return TheLocalSubjectAccessReview|mixed
     */
    public function create($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1/namespaces/{$namespace}/localsubjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1NamespacedLocalSubjectAccessReview'
        );
    }

    /**
     * create a LocalSubjectAccessReview
     *
     * @param $namespace
     * @param TheLocalSubjectAccessReviewV1beta1 $Model
     * @return TheLocalSubjectAccessReviewV1beta1|mixed
     */
    public function createAuthorizationV1beta1($namespace = 'default', \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\LocalSubjectAccessReview $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/authorization.k8s.io/v1beta1/namespaces/{$namespace}/localsubjectaccessreviews"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createAuthorizationV1beta1NamespacedLocalSubjectAccessReview'
        );
    }


}

