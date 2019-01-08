<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * SecretKeySelector selects a key of a Secret.
 */
class SecretKeySelector extends \Kubernetes\AbstractModel
{

    /**
     * The key of the secret to select from.  Must be a valid secret key.
     *
     * @var string
     */
    public $key = null;

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * Specify whether the Secret or it's key must be defined
     *
     * @var boolean
     */
    public $optional = null;


}

