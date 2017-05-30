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


class SELinuxStrategyOptions extends AbstractModel
{
    /**
     * @var string
     * type is the strategy that will dictate the allowable labels that may be set.
     */
    public $rule;

    /**
     * @var SELinuxOptions
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * http://releases.k8s.io/HEAD/docs/design/security_context.md#security-context
     */
    public $seLinuxOptions;

    /**
     * @param SELinuxOptions $seLinuxOptions
     *
     * @return self
     */
    public function setSeLinuxOptions($seLinuxOptions)
    {
        $this->seLinuxOptions = $this->_createPropertyValue($seLinuxOptions, SELinuxOptions::class, false);

        return $this;
    }

}