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

use Kubernetes\API\AbstractAPI as API;
use Kubernetes\Client;
use Kubernetes\Model\AbstractModel as Model;
use PHPUnit\Framework\TestCase;

abstract class AbstractTest extends TestCase
{
    /**
     * @var API
     */
    public $API;

    /**
     * @var Model
     */
    public $Model;

    protected $k8sNamespace = 'unit-test-namespace';

    public static function setUpBeforeClass()
    {
        Client::configure('https://192.168.99.100:8443', [
            'caCert' => __DIR__ . '/../fixture/authentication.ca.crt',
            'token'  => __DIR__ . '/../fixture/authentication.token'
        ]);
    }

}