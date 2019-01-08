<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * Service is a named abstraction of software service (for example, mysql)
 * consisting of local port (for example 3306) that the proxy listens on, and the
 * selector that determines which pods will answer requests sent through the proxy.
 */
class Service extends \Kubernetes\AbstractModel
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
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'Service';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines the behavior of a service.
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ServiceSpec
     */
    public $spec = null;

    /**
     * Most recently observed status of the service. Populated by the system.
     * Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @var ServiceStatus
     */
    public $status = null;


}

