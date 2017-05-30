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
 * ListMeta describes metadata that synthetic resources must have, including lists and various status objects. A
 * resource may have only one of {ObjectMeta, ListMeta}.
 *
 * @package Kubernetes\Model
 */
class ListMeta extends AbstractModel
{
    /**
     * @var string
     * String that identifies the server's internal version of this object that can be used by clients to determine
     * when objects have changed. Value must be treated as opaque by clients and passed unmodified back to the server.
     * Populated by the system. Read-only. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public $selfLink;

}