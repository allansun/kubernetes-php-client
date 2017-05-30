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

class Pod extends AbstractAPI
{

    protected $group = Group::CORE;

    protected $version = Version::V1;

    protected $apiPrefix = 'api';

    protected $apiPostfix = 'pods';

    /**
     * @param string $name
     * @param array  $queryParameters
     *
     * @return string
     */
    public function readLog($name, $queryParameters = [])
    {

        return $this->client->request('GET',
            "/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/log",
            [
                'query' => $queryParameters,
            ]
        );
    }
}