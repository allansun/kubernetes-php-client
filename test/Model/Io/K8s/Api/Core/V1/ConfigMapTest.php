<?php

namespace Kubernetes\Test\Model\Io\K8s\Api\Core\V1;

use Kubernetes\Model\Io\K8s\Api\Core\V1\ConfigMap;
use PHPUnit\Framework\TestCase;

class ConfigMapTest extends TestCase
{

    public function testParseData()
    {
        $data =
            '{"apiVersion":"v1","data":{"BASE_URL":"ebayb2b.com","DB_DATABASE":"ebayb2b","DB_PORT":"3306","DB_HOST":"ebayb2b-eb-test-db","DB_USERNAME":"dbuser","DB_PASSWORD":"M0nchester","DB_ROOT_PASSWORD":"ShotNowVerbEssential"},"kind":"ConfigMap","metadata":{"labels":[],"name":"ebayb2b-eb-test-configmap"},"Config":{}}';

        $ConfigMap = new ConfigMap($data);

        $this->assertArrayNotHasKey('labels', $ConfigMap->getArrayCopy()['metadata']);

    }
}
