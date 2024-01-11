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

use Kubernetes\API\NamespaceAPI as API;
use Kubernetes\Model\NamespaceModel as Model;
use Kubernetes\Model\ObjectMeta;

class NamespaceAPITest extends AbstractTest
{
    public function setUp(): void
    {
        $this->API   = new API($this->k8sNamespace);

        $this->Model = new Model([
            'metadata' => new ObjectMeta([
                'name' => $this->k8sNamespace,
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
        $response = $this->API->read($this->k8sNamespace);
        $this->assertInstanceOf(Model::class, $response);
    }

    public function testDelete()
    {
        $response = $this->API->delete($this->k8sNamespace);
        $this->assertInstanceOf(Model::class, $response);
    }

    public function testList(){
        $response = $this->API->list();

        $this->assertObjectHasAttribute('kind',$response);
    }
}
