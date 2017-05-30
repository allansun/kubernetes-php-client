<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Test\Model\Apps;

use Kubernetes\Logger;
use Kubernetes\Model\Deployment;
use Kubernetes\Model\ObjectMeta;
use PHPUnit\Framework\TestCase;

class DeploymentTest extends TestCase
{
    public function testCreate(){
        $Deployment = new Deployment([
            'kind' => 'testKind'
        ]);
        $this->assertEquals('testKind',$Deployment->getArrayCopy()['kind']);
        Logger::getInstance()->debug('Deployment',$Deployment->getArrayCopy());
    }

    public function testSetMetaData()
    {
        $MetaData = new ObjectMeta();
        $Deployment = new Deployment();
        $Deployment->setMetadata($MetaData);
        $this->assertInstanceOf(ObjectMeta::class,$Deployment->metadata);
    }


}
