<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes;

use KubernetesRuntime\Authentication;
use KubernetesRuntime\Exception\CommonException;
use KubernetesRuntime\Exception\InvalidParameterException;
use PHPUnit\Framework\TestCase;

class AuthenticationTest extends TestCase
{

    public function testInvalidParameter()
    {
        $this->expectException(InvalidParameterException::class);
        new Authentication(['invalidParameter' => 'invalidValue']);
    }

    public function testSuccess()
    {
        $Authentication = new Authentication([
            'caCert'     => 'caCert',
            'clientCert' => 'clientCert',
            'clientKey'  => 'clientKey',
            'token'      => 'token',
            'username'   => 'username',
            'password'   => 'password'
        ]);

        $this->assertEquals('caCert', $Authentication->caCert);
        $this->assertEquals('clientCert', $Authentication->clientCert);
        $this->assertEquals('clientKey', $Authentication->clientKey);
        $this->assertEquals('token', $Authentication->token);
        $this->assertEquals('username', $Authentication->username);
        $this->assertEquals('password', $Authentication->password);
    }

    public function testInfoFromFile()
    {
        $file                  = __DIR__ . '/fixture/authentication.dummy.token';
        $Authentication        = new Authentication();
        $Authentication->token = $file;
        $this->assertEquals('THIS IS A TOKEN', $Authentication->token);
    }

    public function testWrongPropertyAccess()
    {
        $this->expectException(CommonException::class);
        $Authentication = new Authentication();
        $Authentication->wrongProperty;
    }


}
