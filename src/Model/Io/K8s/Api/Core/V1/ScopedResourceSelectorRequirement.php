<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A scoped-resource selector requirement is a selector that contains values, a
 * scope name, and an operator that relates the scope name and values.
 */
class ScopedResourceSelectorRequirement extends \Kubernetes\AbstractModel
{

    /**
     * Represents a scope's relationship to a set of values. Valid operators are In,
     * NotIn, Exists, DoesNotExist.
     *
     * @var string
     */
    public $operator = null;

    /**
     * The name of the scope that the selector applies to.
     *
     * @var string
     */
    public $scopeName = null;

    /**
     * An array of string values. If the operator is In or NotIn, the values array must
     * be non-empty. If the operator is Exists or DoesNotExist, the values array must
     * be empty. This array is replaced during a strategic merge patch.
     *
     * @var string[]
     */
    public $values = null;


}

