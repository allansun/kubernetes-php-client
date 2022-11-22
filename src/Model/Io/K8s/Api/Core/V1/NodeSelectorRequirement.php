<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * A node selector requirement is a selector that contains values, a key, and an
 * operator that relates the key and values.
 */
class NodeSelectorRequirement extends AbstractModel
{

    /**
     * The label key that the selector applies to.
     *
     * @var string
     */
    public $key = null;

    /**
     * Represents a key's relationship to a set of values. Valid operators are In,
     * NotIn, Exists, DoesNotExist. Gt, and Lt.
     *
     * @var string
     */
    public $operator = null;

    /**
     * An array of string values. If the operator is In or NotIn, the values array must
     * be non-empty. If the operator is Exists or DoesNotExist, the values array must
     * be empty. If the operator is Gt or Lt, the values array must have a single
     * element, which will be interpreted as an integer. This array is replaced during
     * a strategic merge patch.
     *
     * @var string[]
     */
    public $values = null;


}

