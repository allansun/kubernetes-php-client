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
 * APIGroup contains the name, the supported versions, and the preferred version of a group.
 *
 * @package Kubernetes\Model
 */
class APIGroup extends AbstractModel
{
    /**
     * @var string
     *
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string
     *
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to.
     * Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string
     *
     * name is the name of the group
     */
    public $name;

    /**
     * @var GroupVersionForDiscovery
     *
     * preferredVersion is the version preferred by the API server, which probably is the storage version.
     */
    public $preferredVersion;

    /**
     * @var ServerAddressByClientCIDR[]
     *
     * a map of client CIDR to server address that is serving this group.
     * This is to help clients reach servers in the most network-efficient way possible.
     * Clients can use the appropriate server address as per the CIDR that they match.
     * In case of multiple matches, clients should use the longest matching CIDR.
     * The server returns only those CIDRs that it thinks that the client can match.
     * For example: the master will return an internal IP CIDR only,
     * if the client reaches the server using an internal IP.
     * Server looks at X-Forwarded-For header or X-Real-Ip header or request.
     * RemoteAddr (in that order) to get the client IP.
     */
    public $serverAddressByClientCIDRs;

    /**
     * @var GroupVersionForDiscovery[]
     */
    public $versions;

    /**
     * @param ServerAddressByClientCIDR[] $serverAddressByClientCIDRs
     *
     * @return self
     */
    public function setServerAddressByClientCIDRs($serverAddressByClientCIDRs)
    {
        $this->serverAddressByClientCIDRs =
            $this->_createPropertyValue($serverAddressByClientCIDRs, ServerAddressByClientCIDR::class, true);

        return $this;
    }

    /**
     * @param GroupVersionForDiscovery[] $versions
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->versions = $this->_createPropertyValue($versions, GroupVersionForDiscovery::class, true);

        return $this;
    }

}