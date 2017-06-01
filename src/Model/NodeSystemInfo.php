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


class NodeSystemInfo extends AbstractModel
{
    /**
     * @var string
     * The Architecture reported by the node
     */
    public $architecture;

    /**
     * @var string
     * Boot ID reported by the node.
     */
    public $bootID;

    /**
     * @var string
     * ContainerRuntime Version reported by the node through runtime remote API (e.g. docker://1.5.0).
     */
    public $containerRuntimeVersion;

    /**
     * @var string
     * Kernel Version reported by the node from 'uname -r' (e.g. 3.16.0-0.bpo.4-amd64).
     */
    public $kernelVersion;

    /**
     * @var string
     * KubeProxy Version reported by the node.
     */
    public $kubeProxyVersion;

    /**
     * @var string
     * Kubelet Version reported by the node.
     */
    public $kubeletVersion;

    /**
     * @var string
     * MachineID reported by the node. For unique machine identification in the cluster this field is prefered. Learn
     * more from man(5) machine-id: http://man7.org/linux/man-pages/man5/machine-id.5.html
     */
    public $machineID;

    /**
     * @var string
     * The Operating System reported by the node
     */
    public $operatingSystem;

    /**
     * @var string
     * OS Image reported by the node from /etc/os-release (e.g. Debian GNU/Linux 7 (wheezy)).
     */
    public $osImage;

    /**
     * @var string
     * SystemUUID reported by the node. For unique machine identification MachineID is prefered. This field is specific
     * to Red Hat hosts
     * https://access.redhat.com/documentation/en-US/Red_Hat_Subscription_Management/1/html/RHSM/getting-system-uuid.html
     */
    public $systemUUID;
}