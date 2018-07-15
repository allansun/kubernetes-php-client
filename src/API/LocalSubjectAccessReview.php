<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Authorization\V1\LocalSubjectAccessReview as LocalSubjectAccessReview;
use \Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1\LocalSubjectAccessReview as LocalSubjectAccessReview;

class LocalSubjectAccessReview extends \Kubernetes\AbstractAPI
{

    /**
     * create a LocalSubjectAccessReview
     *
     * @param string $namespace
     * @param LocalSubjectAccessReview $Model
     * @return LocalSubjectAccessReview|mixed
     */
    public function create(string $namespace = 'default', \LocalSubjectAccessReview $Model)
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
     * @param string $namespace
     * @param LocalSubjectAccessReview $Model
     * @return LocalSubjectAccessReview|mixed
     */
    public function createAuthorizationV1beta1(string $namespace = 'default', \LocalSubjectAccessReview $Model)
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

