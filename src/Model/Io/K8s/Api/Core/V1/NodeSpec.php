<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * NodeSpec describes the attributes that a node is created with.
 */
class NodeSpec extends \KubernetesRuntime\AbstractModel
{

    /**
     * If specified, the source to get node configuration from The DynamicKubeletConfig
     * feature gate must be enabled for the Kubelet to use this field
     *
     * @var NodeConfigSource
     */
    public $configSource = null;

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see:
     * https://issues.k8s.io/61966
     *
     * @var string
     */
    public $externalID = null;

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     *
     * @var string
     */
    public $podCIDR = null;

    /**
     * podCIDRs represents the IP ranges assigned to the node for usage by Pods on that
     * node. If this field is specified, the 0th entry must match the podCIDR field. It
     * may contain at most 1 value for each of IPv4 and IPv6.
     *
     * @var string[]
     */
    public $podCIDRs = null;

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     *
     * @var string
     */
    public $providerID = null;

    /**
     * If specified, the node's taints.
     *
     * @var Taint[]
     */
    public $taints = null;

    /**
     * Unschedulable controls node schedulability of new pods. By default, node is
     * schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     *
     * @var boolean
     */
    public $unschedulable = null;


}

