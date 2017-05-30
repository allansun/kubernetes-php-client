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


class GroupVersionForDiscovery extends AbstractModel
{
    /**
     * @var string
     *
     * groupVersion specifies the API group and version in the form "group/version"
     */
    public $groupVersion;

    /**
     * @var string
     * version specifies the version in the form of "version".
     * This is to save the clients the trouble of splitting the GroupVersion.
     */
    public $version;

}