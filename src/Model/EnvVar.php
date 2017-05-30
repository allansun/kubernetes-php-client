<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


/**
 * EnvVar represents an environment variable present in a Container.
 *
 * @package Kubernetes\Model
 */
class EnvVar extends AbstractModel
{
    /**
     * @var string
     * Name of the environment variable. Must be a C_IDENTIFIER.
     */
    public $name;

    /**
     * @var string
     * Variable references $(VAR_NAME) are expanded using the previous defined environment variables in the
     * container and any service environment variables.
     * If a variable cannot be resolved, the reference in the input string will be unchanged.
     * The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME).
     * Escaped references will never be expanded, regardless of whether the variable exists or not.
     * Defaults to ""
     */
    public $value = '';

    /**
     * @var EnvVarSource
     * Source for the environment variable's value. Cannot be used if value is not empty.
     */
    public $valueFrom;

    /**
     * @param EnvVarSource $valueFrom
     *
     * @return self
     */
    public function setValueFrom($valueFrom)
    {
        $this->valueFrom = $this->_createPropertyValue($valueFrom, EnvVarSource::class, false);

        return $this;
    }

}