<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * Event represents a single event to a watched resource.
 */
class WatchEvent extends \Kubernetes\AbstractModel
{

    /**
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Runtime\RawExtension
     */
    public $object = null;

    /**
     * @var string
     */
    public $type = null;


}

