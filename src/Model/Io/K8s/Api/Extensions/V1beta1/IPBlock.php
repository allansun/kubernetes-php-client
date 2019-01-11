<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * DEPRECATED 1.9 - This group version of IPBlock is deprecated by
 * networking/v1/IPBlock. IPBlock describes a particular CIDR (Ex.
 * "192.168.1.1/24") that is allowed to the pods matched by a NetworkPolicySpec's
 * podSelector. The except entry describes CIDRs that should not be included within
 * this rule.
 *
 * @deprecated
 */
class IPBlock extends \KubernetesRuntime\AbstractModel
{

    /**
     * CIDR is a string representing the IP Block Valid examples are "192.168.1.1/24"
     *
     * @var string
     */
    public $cidr = null;

    /**
     * Except is a slice of CIDRs that should not be included within an IP Block Valid
     * examples are "192.168.1.1/24" Except values will be rejected if they are outside
     * the CIDR range
     *
     * @var string[]
     */
    public $except = null;


}
