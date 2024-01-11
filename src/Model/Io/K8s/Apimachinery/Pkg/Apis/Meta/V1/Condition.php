<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Condition contains details for one aspect of the current state of this API
 * Resource.
 */
class Condition extends AbstractModel
{
    /**
     * lastTransitionTime is the last time the condition transitioned from one status
     * to another. This should be when the underlying condition changed.  If that is
     * not known, then using the time when the API field changed is acceptable.
     *
     * @var Time
     */
    public $lastTransitionTime = null;

    /**
     * message is a human readable message indicating details about the transition.
     * This may be an empty string.
     *
     * @var string
     */
    public $message = null;

    /**
     * observedGeneration represents the .metadata.generation that the condition was
     * set based upon. For instance, if .metadata.generation is currently 12, but the
     * .status.conditions[x].observedGeneration is 9, the condition is out of date with
     * respect to the current state of the instance.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * reason contains a programmatic identifier indicating the reason for the
     * condition's last transition. Producers of specific condition types may define
     * expected values and meanings for this field, and whether the values are
     * considered a guaranteed API. The value should be a CamelCase string. This field
     * may not be empty.
     *
     * @var string
     */
    public $reason = null;

    /**
     * status of the condition, one of True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * type of condition in CamelCase or in foo.example.com/CamelCase.
     *
     * @var string
     */
    public $type = null;
}

