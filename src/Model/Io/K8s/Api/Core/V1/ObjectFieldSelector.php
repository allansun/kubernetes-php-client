<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ObjectFieldSelector selects an APIVersioned field of an object.
 */
class ObjectFieldSelector extends \Kubernetes\AbstractModel
{

    /**
     * Version of the schema the FieldPath is written in terms of, defaults to "v1".
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * Path of the field to select in the specified API version.
     *
     * @var string
     */
    public $fieldPath = null;


}

