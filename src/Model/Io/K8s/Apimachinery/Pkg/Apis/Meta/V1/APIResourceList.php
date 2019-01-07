<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * APIResourceList is a list of APIResource, it is used to expose the name of the
 * resources supported in a specific group and version, and if the resource is
 * namespaced.
 */
class APIResourceList extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'v1';

    /**
     * groupVersion is the group and version this APIResourceList is for.
     *
     * @var string
     */
    public $groupVersion = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'APIResourceList';

    /**
     * resources contains the name of the resources and if they are namespaced.
     *
     * @var APIResource[]
     */
    public $resources = null;


}

