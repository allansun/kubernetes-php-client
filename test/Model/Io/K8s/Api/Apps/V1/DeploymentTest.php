<?php

namespace Kubernetes\Test\Model\Io\K8s\Api\Apps\V1;

use Kubernetes\Model\Io\K8s\Api\Apps\V1\Deployment;
use Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta;
use PHPUnit\Framework\TestCase;

class DeploymentTest extends TestCase
{

    protected $json;

    protected function setUp()
    {
        $this->json =
            '{"apiVersion":"v1","kind":"Deployment","metadata":{"annotations":{"dacang.k8s.io\/update-timestamp":"2018-08-03T16:20:39+00:00"},"labels":[],"name":"ebayb2b-eb-test-app"},"spec":{"selector":{"matchLabels":{"project":"ebayb2b","branch":"eb-test","service":"app"}},"strategy":{"rollingUpdate":{"maxSurge":{},"maxUnavailable":{}},"type":"RollingUpdate"},"template":{"metadata":{"creationTimestamp":null,"deletionTimestamp":null,"initializers":[],"labels":[],"name":"ebayb2b-eb-test-app"},"spec":{"affinity":[],"containers":[{"name":"app","envFrom":[{"configMapRef":{"name":"ebayb2b-eb-test-configmap"}}],"image":"dacang\/ebayb2b:eb-test","imagePullPolicy":"Always","readinessProbe":{"httpGet":{"path":"\/","port":80},"initialDelaySeconds":5,"periodSeconds":5,"successThreshold":1},"resources":{"requests":{"cpu":"20m"}},"stdin":true,"tty":true}],"dnsConfig":[],"imagePullSecrets":[{"name":"docker-secret"}],"nodeSelector":{"environment":"test"},"securityContext":[]}}}}';
    }


    public function testGetArrayCopy()
    {
        $Deployment = new Deployment($this->json);
        $arrayCopy  = $Deployment->getArrayCopy();
        $this->assertEquals(json_decode($this->json,true), $arrayCopy);

    }

    public function testExchangeArray()
    {
        $Deployment = new Deployment($this->json);
        $this->assertEquals('Deployment', $Deployment->kind);
        $this->assertInstanceOf(ObjectMeta::class, $Deployment->metadata);
    }
}
