<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * Initializers tracks the progress of initialization.
 */
class Initializers extends \Kubernetes\AbstractModel
{

    /**
     * Pending is a list of initializers that must execute in order before this object
     * is visible. When the last pending initializer is removed, and no failing result
     * is set, the initializers struct will be set to nil and the object is considered
     * as initialized and visible to all clients.
     *
     * @var Initializer[]
     */
    public $pending = null;

    /**
     * If result is set with the Failure field, the object will be persisted to storage
     * and then deleted, ensuring that other clients can observe the deletion.
     *
     * @var Status
     */
    public $result = null;


}

