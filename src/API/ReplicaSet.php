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
use Kubernetes\Model\Patch;
use Kubernetes\Model\Scale;
use Kubernetes\Model\Tag\Group;
use Kubernetes\Model\Tag\Version;

class ReplicaSet extends AbstractAPI
{

    protected $group = Group::EXTENSIONS;

    protected $version = Version::V1BETA1;

    protected $apiPostfix = 'replicasets';

    /**
     * @param string $name
     * @param array  $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function readScale($name, $queryParameters = [])
    {

        return $this->parseRseponse(
            $this->client->request('GET',
                "/apis/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/scale",
                [
                    'query' => $queryParameters,
                ]
            )
        );
    }

    /**
     * @param string $name
     * @param Scale  $model
     * @param array  $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function replaceScale($name, Scale $model, $queryParameters = [])
    {

        return $this->parseRseponse(
            $this->client->request('PUT',
                "/apis/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/scale",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }

    /**
     * @param string $name
     * @param Patch  $model
     * @param array  $queryParameters
     *
     * @return AbstractModel|\StdClass
     */
    public function patchScale($name, Patch $model, $queryParameters = [])
    {

        return $this->parseRseponse(
            $this->client->request('PATCH',
                "/apis/{$this->getApiPrefix()}/namespaces/{$this->namespace}/{$this->apiPostfix}/{$name}/scale",
                [
                    'query' => $queryParameters,
                    'json'  => $model->getArrayCopy()
                ]
            )
        );
    }
}