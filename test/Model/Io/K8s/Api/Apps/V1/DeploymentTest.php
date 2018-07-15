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
            '{"apiVersion":"apps\/v1","kind":"Deployment","metadata":{"annotations":{"dacang.k8s.io\/update-timestamp":"2018-07-04T23:28:50+00:00"},"labels":{"project":"ebayb2b","branch":"master","service":"app"},"name":"ebayb2b-master-app","namespace":"default"},"spec":{"minReadySeconds":0,"progressDeadlineSeconds":600,"replicas":1,"revisionHistoryLimit":2,"selector":{"matchLabels":{"project":"ebayb2b","branch":"master","service":"app"}},"strategy":{"rollingUpdate":{"maxSurge":"100%","maxUnavailable":"100%"},"type":"RollingUpdate"},"template":{"metadata":{"labels":{"project":"ebayb2b","branch":"master","service":"app"},"name":"ebayb2b-master-app","namespace":"default"},"spec":{"containers":[{"envFrom":[{"configMapRef":{"name":"ebayb2b-master-configmap"}}],"image":"dacang\/ebayb2b:master","imagePullPolicy":"Always","name":"app","readinessProbe":{"failureThreshold":3,"httpGet":{"path":"\/","port":80},"initialDelaySeconds":5,"periodSeconds":5,"successThreshold":1,"timeoutSeconds":1},"resources":{"requests":{"cpu":"40m"}},"stdin":true,"terminationMessagePath":"\/dev\/termination-log","terminationMessagePolicy":"File","tty":true}],"dnsPolicy":"ClusterFirst","imagePullSecrets":[{"name":"docker-secret"}],"nodeSelector":{"function":"misc"},"restartPolicy":"Always","terminationGracePeriodSeconds":30}}}}';
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
