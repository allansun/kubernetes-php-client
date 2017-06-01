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

use GuzzleHttp;
use Kubernetes\Exception\CommonException;
use Kubernetes\Exception\ResponseException;

class Client
{
    /**
     * @var Client
     */
    static private $instance;

    /**
     * @var array
     */
    private $defaultOptions = [];

    /**
     * @var GuzzleHttp\Client
     */
    private $guzzle;

    /**
     * Client constructor.
     *
     * @param string               $master
     * @param array|Authentication $authenticationInfo
     */
    private function __construct($master, $authenticationInfo)
    {
        // Setup basic Info
        $this->defaultOptions = [
            'base_uri'    => $master,
            'headers'     => [
                'Accepts' => 'application/json'
            ],
            'http_errors' => false
        ];

        // Setup authentication
        if (!is_a($authenticationInfo, Authentication::class)) {
            $authenticationInfo = new Authentication($authenticationInfo);
        }
        if ($authenticationInfo->caCert) {
            $this->defaultOptions['verify'] = $authenticationInfo->caCert;
        }
        if ($authenticationInfo->clientCert) {
            $this->defaultOptions['cert'] = $authenticationInfo->clientCert;
        }
        if ($authenticationInfo->clientKey) {
            $this->defaultOptions['ssl_key'] = $authenticationInfo->clientKey;
        }
        if ($authenticationInfo->token) {
            $this->defaultOptions['headers']['Authorization'] = 'Bearer ' . $authenticationInfo->token;
        }
        if ($authenticationInfo->username && $authenticationInfo->password) {
            $this->defaultOptions['auth'] = [
                $authenticationInfo->username,
                $authenticationInfo->password
            ];
        }

        // Setup logging bit
        $HandlerStack = GuzzleHttp\HandlerStack::create();
        $HandlerStack->push(
            GuzzleHttp\Middleware::log(
                Logger::getInstance()->getLogger(),
                new GuzzleHttp\MessageFormatter('URI:{uri} - Request:{req_body} - Response:{res_body}')
            )

        );
        $this->defaultOptions['handler'] = $HandlerStack;

        // Create the actual client
        $this->guzzle = new GuzzleHttp\Client($this->defaultOptions);
    }

    /**
     * @param string               $master
     * @param array|Authentication $authenticationInfo
     *
     * @return Client
     */
    public static function configure($master, $authenticationInfo)
    {
        self::$instance = new Client($master, $authenticationInfo);

        return self::$instance;
    }

    /**
     * @return Client
     * @throws CommonException
     */
    public static function getInstance()
    {
        if (self::$instance instanceof Client) {
            return self::$instance;
        } else {
            throw new CommonException('Must run Client::configure() first!');
        }
    }

    /**
     * @param                    $method
     * @param                    $uri
     * @param array              $options
     *
     * @return \StdClass|string
     * @throws ResponseException
     */
    public function request($method, $uri, $options = [])
    {
        $json     = null;
        $options  = array_merge($this->defaultOptions, $options);
        $res      = $this->guzzle->request($method, $uri, $options);
        $contents = (string)$res->getBody();
        if ($res->getHeader('content-type')[0] == 'application/json') {
            return json_decode($contents);
        } else {
            return $contents;
        }

    }

    /**
     * @param $option
     * @param $value
     *
     * @return $this
     */
    public function setDefaultOption($option, $value)
    {
        $this->defaultOptions[$option] = $value;

        return $this;
    }
}