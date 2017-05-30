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


class AbstractSpec extends AbstractModel
{
    /**
     * @var string[]
     * Finalizers is an opaque list of values that must be empty to permanently remove object from storage.
     * More info: http://releases.k8s.io/HEAD/docs/design/namespaces.md#finalizers
     */
    public $finalizers;

}