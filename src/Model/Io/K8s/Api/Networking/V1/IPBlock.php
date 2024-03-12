<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IPBlock describes a particular CIDR (Ex. "192.168.1.0/24","2001:db8::/64") that
 * is allowed to the pods matched by a NetworkPolicySpec's podSelector. The except
 * entry describes CIDRs that should not be included within this rule.
 */
class IPBlock extends AbstractModel
{
    /**
     * CIDR is a string representing the IP Block Valid examples are "192.168.1.0/24"
     * or "2001:db8::/64"
     *
     * @var string
     */
    public $cidr = null;

    /**
     * Except is a slice of CIDRs that should not be included within an IP Block Valid
     * examples are "192.168.1.0/24" or "2001:db8::/64" Except values will be rejected
     * if they are outside the CIDR range
     *
     * @var string[]
     */
    public $except = null;
}

