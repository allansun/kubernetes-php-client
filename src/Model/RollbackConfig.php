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

class RollbackConfig extends AbstractModel
{
    /**
     * @var integer
     * The revision to rollback to. If set to 0, rollbck to the last revision.
     */
    public $revision;
}