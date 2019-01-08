<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * A label selector requirement is a selector that contains values, a key, and an
 * operator that relates the key and values.
 */
class LabelSelectorRequirement extends \Kubernetes\AbstractModel
{

    /**
     * key is the label key that the selector applies to.
     *
     * @var string
     */
    public $key = null;

    /**
     * operator represents a key's relationship to a set of values. Valid operators are
     * In, NotIn, Exists and DoesNotExist.
     *
     * @var string
     */
    public $operator = null;

    /**
     * values is an array of string values. If the operator is In or NotIn, the values
     * array must be non-empty. If the operator is Exists or DoesNotExist, the values
     * array must be empty. This array is replaced during a strategic merge patch.
     *
     * @var string[]
     */
    public $values = null;


}

