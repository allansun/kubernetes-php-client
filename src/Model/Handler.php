<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;

/**
 * Handler defines a specific action that should be taken
 *
 * @package Kubernetes\Model
 */
class Handler extends AbstractModel
{
    /**
     * @var ExecAction
     * One and only one of the following should be specified. Exec specifies the action to take.
     */
    public $exec;

    /**
     * @var HTTPGetAction
     * HTTPGet specifies the http request to perform.
     */
    public $httpGet;

    /**
     * @var TCPSocketAction
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     */
    public $tcpSocket;

    /**
     * @param ExecAction $exec
     *
     * @return self
     */
    public function setExec($exec)
    {
        $this->exec = $this->_createPropertyValue($exec, ExecAction::class, false);

        return $this;
    }

    /**
     * @param HTTPGetAction $httpGet
     *
     * @return self
     */
    public function setHttpGet($httpGet)
    {
        $this->httpGet = $this->_createPropertyValue($httpGet, HTTPGetAction::class, false);

        return $this;
    }

    /**
     * @param TCPSocketAction $tcpSocket
     *
     * @return self
     */
    public function setTcpSocket($tcpSocket)
    {
        $this->tcpSocket = $this->_createPropertyValue($tcpSocket, TCPSocketAction::class, false);

        return $this;
    }


}