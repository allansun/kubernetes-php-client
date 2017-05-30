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

use Kubernetes\API\Deployment as DeployementAPI;
use Kubernetes\API\Pod as API;
use Kubernetes\Model\Container;
use Kubernetes\Model\Deployment as DeployementModel;
use Kubernetes\Model\ObjectMeta;
use Kubernetes\Model\Pod as Model;
use Kubernetes\Model\PodSpec;
use Kubernetes\Test\Exception\TestException;

/**
 * Class PodTest
 *
 * @package Kubernetes\Test\API
 */
class PodTest extends AbstractTest
{
    const NAME = 'test-pod';

    /**
     * @var API
     */
    public $API;

    /**
     * @var Model
     */
    public $Model;

    public function setUp()
    {
        $DeploymentAPI = new DeployementAPI($this->k8sNamespace);
        $Deployment    = $DeploymentAPI->read(DeploymentTest::NAME);
        if (!$Deployment instanceof DeployementModel) {
            throw new TestException('Namespace not initiated');
        }

        $this->API = new API($this->k8sNamespace);

        $this->Model = new Model([
            'metadata' => new ObjectMeta([
                'name'      => self::NAME,
                'namespace' => $this->k8sNamespace
            ]),
            'spec'     => new PodSpec([
                'containers' => [
                    new Container([
                        'image' => 'nginx'
                    ])
                ]
            ])
        ]);
    }

    public function testReadLog()
    {
        $log = $this->API->readLog('test-deployment-3698913006-lmvh4');
        if ($log) {
            $this->assertNotInstanceOf(Status::class, $log);
        }else{
            $this->assertTrue(true);
        }
    }
}
