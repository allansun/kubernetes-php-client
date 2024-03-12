<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Test;

use GuzzleHttp\Utils;
use KubernetesRuntime\Authentication;
use KubernetesRuntime\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testDummy()
    {
        $Authentication         = new Authentication();
        $Authentication->caCert = __DIR__ . '/fixture/authentication.ca.crt';
        $Authentication->token  = __DIR__ . '/fixture/authentication.token';
        Client::configure('http://192.168.99.100:8443', $Authentication);
        $Client = Client::getInstance();
        $response = $Client->request('GET', '/api/v1/namespaces');
        $this->assertJson(Utils::jsonEncode($response));
    }
}
