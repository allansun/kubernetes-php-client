<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * A topology selector requirement is a selector that matches given label. This is
 * an alpha feature and may change in the future.
 */
class TopologySelectorLabelRequirement extends \Kubernetes\AbstractModel
{

    /**
     * The label key that the selector applies to.
     *
     * @var string
     */
    public $key = null;

    /**
     * An array of string values. One value must match the label to be selected. Each
     * entry in Values is ORed.
     *
     * @var string[]
     */
    public $values = null;


}

