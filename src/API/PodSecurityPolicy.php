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

class PodSecurityPolicy extends AbstractAPI
{

    protected $group = Group::EXTENSIONS;

    protected $version = Version::V1BETA1;

    protected $apiPostfix = 'podsecuritypolicies';

    protected $isStatusFunctionAvailable = false;
}