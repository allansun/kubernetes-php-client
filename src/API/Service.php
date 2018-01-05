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


use Kubernetes\Exception\ProhibitedOperationException;
use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class Service extends AbstractAPI
{

    protected $group = Group::CORE;

    protected $version = Version::V1;

    protected $apiPostfix = 'services';

    protected $apiPrefix = 'api';

    /**
     * @param array $queryParameters
     *
     * @throws ProhibitedOperationException
     */
    public function deleteCollection($queryParameters = [])
    {
        throw new ProhibitedOperationException();
    }


}