<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Test\API;

use Kubernetes\API\Deployment as API;
use Kubernetes\API\KubernetesNamespace as NamespaceAPI;
use Kubernetes\Model\Container;
use Kubernetes\Model\Deployment as Model;
use Kubernetes\Model\DeploymentSpec;
use Kubernetes\Model\NamespaceModel;
use Kubernetes\Model\ObjectMeta;
use Kubernetes\Model\PodSpec;
use Kubernetes\Model\PodTemplateSpec;
use Kubernetes\Test\Exception\TestException;

class DeploymentTest extends AbstractTest
{
    const NAME = 'test-deployment';

    public function setUp(): void
    {
        $NamespaceAPI = new NamespaceAPI();
        $Namespace    = $NamespaceAPI->read($this->k8sNamespace);

        if (!$Namespace instanceof NamespaceModel) {
            throw new TestException('Namespace not initiated');
        }

        $this->API = new API($this->k8sNamespace);

        $this->Model = new Model([
            'metadata' => new ObjectMeta([
                'name'      => self::NAME,
                'namespace' => $this->k8sNamespace
            ]),
            'spec'     => new DeploymentSpec([
                'template' => new PodTemplateSpec([
                    'metadata' => new ObjectMeta([
                        'labels' => [
                            'app' => ''
                        ]
                    ]),
                    'spec'     => new PodSpec([
                        'containers' => [
                            new Container([
                                'image' => 'nginx',
                                'name'  => 'test-container'
                            ])
                        ]
                    ])
                ])
            ])
        ]);
    }

    public function testCreate()
    {
        $response = $this->API->create($this->Model);
        $this->assertInstanceOf(Model::class, $response);
    }

    public function testRead()
    {
        $response = $this->API->read(self::NAME);
        $this->assertInstanceOf(Model::class, $response);
    }

    public function testDelete()
    {
        $response = $this->API->delete(self::NAME);
        $this->assertInstanceOf(Model::class, $response);
    }
}
