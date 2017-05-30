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
 * HTTPIngressRuleValue is a list of http selectors pointing to backends. In the example: http:///? -> backend where
 * where parts of the url correspond to RFC 3986, this resource will be used to match against everything after the last
 * '/' and before the first '?' or '#'.
 *
 * @package Kubernetes\Model
 */
class HTTPIngressRuleValue extends AbstractModel
{
    /**
     * @var HTTPIngressPath[]
     * A collection of paths that map requests to backends.
     */
    public $paths;

    /**
     * @param HTTPIngressPath[] $paths
     *
     * @return self
     */
    public function setPaths($paths)
    {
        $this->paths = $this->_createPropertyValue($paths, HTTPIngressPath::class, true);

        return $this;
    }


}