<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * EnvVar represents an environment variable present in a Container.
 */
class EnvVar extends \Kubernetes\AbstractModel
{

    /**
     * Name of the environment variable. Must be a C_IDENTIFIER.
     *
     * @var string
     */
    public $name = null;

    /**
     * Variable references $(VAR_NAME) are expanded using the previous defined
     * environment variables in the container and any service environment variables. If
     * a variable cannot be resolved, the reference in the input string will be
     * unchanged. The $(VAR_NAME) syntax can be escaped with a double $$, ie:
     * $$(VAR_NAME). Escaped references will never be expanded, regardless of whether
     * the variable exists or not. Defaults to "".
     *
     * @var string
     */
    public $value = null;

    /**
     * Source for the environment variable's value. Cannot be used if value is not
     * empty.
     *
     * @var EnvVarSource
     */
    public $valueFrom = null;


}

