<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceCIDRSpec define the CIDRs the user wants to use for allocating ClusterIPs
 * for Services.
 */
class ServiceCIDRSpec extends AbstractModel
{
    /**
     * CIDRs defines the IP blocks in CIDR notation (e.g. "192.168.0.0/24" or
     * "2001:db8::/64") from which to assign service cluster IPs. Max of two CIDRs is
     * allowed, one of each IP family. This field is immutable.
     *
     * @var string[]
     */
    public $cidrs = null;
}

