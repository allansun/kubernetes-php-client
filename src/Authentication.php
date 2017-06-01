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


use Kubernetes\Exception\CommonException;
use Kubernetes\Exception\InvalidParameterException;

/**
 * Class Authentication
 *
 * @package Kubernetes
 * @property string|array $caCert
 * @property string|array $clientCert
 * @property string|array $clientKey
 * @property string       $token
 * @property string       $username
 * @property string       $password
 *
 * @see     http://docs.guzzlephp.org/en/latest/request-options.html#cert
 */
class Authentication
{

    protected $caCert;
    protected $clientCert;
    protected $clientKey;
    protected $token;
    protected $username;
    protected $password;

    /**
     * Authentication constructor.
     *
     * @param array $options
     *
     * @throws InvalidParameterException
     */
    public function __construct(array $options = [])
    {
        foreach ($options as $key => $value) {
            $this->__set($key, $value);
        }
    }

    public function __get($name)
    {
        if (property_exists(self::class, $name)) {
            return $this->$name;
        } else {
            throw new CommonException(sprintf('Unkown property [%s]', $name));
        }
    }

    public function __set($name, $value)
    {
        if (property_exists(self::class, $name)) {
            if ('token' == $name) {
                $this->$name = $this->readFromFile($value) ?: $value;
            } else {
                $this->$name = $value;
            }
        } else {
            throw new InvalidParameterException($name, $value);
        }

    }

    /**
     * @param $file
     *
     * @return bool|string
     */
    protected function readFromFile($file)
    {
        if (is_file($file)) {
            return file_get_contents($file);
        } else {
            return false;
        }
    }
}