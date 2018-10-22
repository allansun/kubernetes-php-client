<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

/**
 * Initializer describes the name and the failure policy of an initializer, and
 * what resources it applies to.
 */
class Initializer extends \Kubernetes\AbstractModel
{

    /**
     * Name is the identifier of the initializer. It will be added to the object that
     * needs to be initialized. Name should be fully qualified, e.g.,
     * alwayspullimages.kubernetes.io, where "alwayspullimages" is the name of the
     * webhook, and kubernetes.io is the name of the organization. Required
     *
     * @var string
     */
    public $name = null;

    /**
     * Rules describes what resources/subresources the initializer cares about. The
     * initializer cares about an operation if it matches _any_ Rule. Rule.Resources
     * must not include subresources.
     *
     * @var Rule[]
     */
    public $rules = null;


}

