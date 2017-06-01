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
 * Probe describes a health check to be performed against a container to determine whether it is alive
 * or ready to receive traffic.
 *
 * @package Kubernetes\Model
 */
class Probe extends AbstractModel
{
    /**
     * @var ExecAction
     * One and only one of the following should be specified. Exec specifies the action to take.
     */
    public $exec;

    /**
     * @var integer
     * Minimum consecutive failures for the probe to be considered failed after having succeeded.
     * Defaults to 3. Minimum value is 1.
     */
    public $failureThreshold = 3;

    /**
     * @var HTTPGetAction
     * HTTPGet specifies the http request to perform.
     */
    public $httpGet;

    /**
     * @var integer
     * Number of seconds after the container has started before liveness probes are initiated.
     * More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     */
    public $initialDelaySeconds;

    /**
     * @var integer
     * How often (in seconds) to perform the probe. Default to 10 seconds. Minimum value is 1.
     */
    public $periodSeconds = 1;

    /**
     * @var integer
     * Minimum consecutive successes for the probe to be considered successful after having failed.
     * Defaults to 1. Must be 1 for liveness. Minimum value is 1.
     */
    public $successThreshold = 1;

    /**
     * @var TCPSocketAction
     * TCPSocket specifies an action involving a TCP port. TCP hooks not yet supported
     */
    public $tcpSocket;

    /**
     * @var integer
     * Number of seconds after which the probe times out. Defaults to 1 second. Minimum value is 1.
     * More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     */
    public $timeoutSeconds = 1;

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