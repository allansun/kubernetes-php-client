<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\API;


use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class Event extends AbstractAPI
{

    protected $group = Group::CORE;

    protected $version = Version::V1;

    protected $apiPostfix = 'events';

    protected $isStatusFunctionAvailable = false;
}