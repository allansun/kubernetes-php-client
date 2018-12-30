<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1beta1;

/**
 * NonResourceAttributes includes the authorization attributes available for
 * non-resource requests to the Authorizer interface
 */
class NonResourceAttributes extends \Kubernetes\AbstractModel
{

    /**
     * Path is the URL path of the request
     *
     * @var string
     */
    public $path = null;

    /**
     * Verb is the standard HTTP verb
     *
     * @var string
     */
    public $verb = null;


}

