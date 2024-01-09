<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeSystemInfo is a set of ids/uuids to uniquely identify the node.
 */
class NodeSystemInfo extends AbstractModel
{
    /**
     * The Architecture reported by the node
     *
     * @var string
     */
    public $architecture = null;

    /**
     * Boot ID reported by the node.
     *
     * @var string
     */
    public $bootID = null;

    /**
     * ContainerRuntime Version reported by the node through runtime remote API (e.g.
     * containerd://1.4.2).
     *
     * @var string
     */
    public $containerRuntimeVersion = null;

    /**
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     *
     * @var string
     */
    public $kernelVersion = null;

    /**
     * KubeProxy Version reported by the node.
     *
     * @var string
     */
    public $kubeProxyVersion = null;

    /**
     * Kubelet Version reported by the node.
     *
     * @var string
     */
    public $kubeletVersion = null;

    /**
     * MachineID reported by the node. For unique machine identification in the cluster
     * this field is preferred. Learn more from man(5) machine-id:
     * http://man7.org/linux/man-pages/man5/machine-id.5.html
     *
     * @var string
     */
    public $machineID = null;

    /**
     * The Operating System reported by the node
     *
     * @var string
     */
    public $operatingSystem = null;

    /**
     * OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7
     * (wheezy)).
     *
     * @var string
     */
    public $osImage = null;

    /**
     * SystemUUID reported by the node. For unique machine identification MachineID is
     * preferred. This field is specific to Red Hat hosts
     * https://access.redhat.com/documentation/en-us/red_hat_subscription_management/1/html/rhsm/uuid
     *
     * @var string
     */
    public $systemUUID = null;
}

