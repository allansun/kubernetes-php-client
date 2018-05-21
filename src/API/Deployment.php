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


use Kubernetes\Model\AbstractModel;
use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class Deployment extends AbstractAPI
{

    protected $group = Group::APPS;

    protected $version = Version::V1;

    protected $apiPostfix = 'deployments';

    /**
     * @param string        $name
     * @param AbstractModel $model
     * @param array         $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function rollback($name, AbstractModel $model, $queryParameters = [])
    {

        return $this->parseRseponse(
            $this->client->request('POST',
                "/apis/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/rollback",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }
}