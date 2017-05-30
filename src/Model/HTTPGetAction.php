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
 * HTTPGetAction describes an action based on HTTP Get requests.
 *
 * @package Kubernetes\Model
 */
class HTTPGetAction extends AbstractModel
{

    /**
     * @var string
     * Host name to connect to, defaults to the pod IP. You probably want to set "Host" in httpHeaders instead.
     */
    public $host;

    /**
     * @var HTTPHeader[]
     * Custom headers to set in the request. HTTP allows repeated headers.
     */
    public $httpHeaders;

    /**
     * @var string
     * Path to access on the HTTP server.
     */
    public $path;

    /**
     * @var integer|string
     * Name or number of the port to access on the container.
     * Number must be in the range 1 to 65535.
     * Name must be an IANA_SVC_NAME.
     */
    public $port;

    /**
     * @var string
     * Scheme to use for connecting to the host. Defaults to HTTP.
     */
    public $scheme;

    /**
     * @param HTTPHeader[] $httpHeaders
     *
     * @return self
     */
    public function setHttpHeaders($httpHeaders)
    {
        $this->httpHeaders = $this->_createPropertyValue($httpHeaders, HTTPHeader::class, true);

        return $this;
    }

}