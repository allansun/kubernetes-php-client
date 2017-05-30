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


class AbstractStatus extends AbstractModel
{
    /**
     * @var string
     * Phase is the current lifecycle phase of the namespace.
     * More info: http://releases.k8s.io/HEAD/docs/design/namespaces.md#phases
     */
    public $phase;
}