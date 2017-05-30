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
 * SecurityContext holds security configuration that will be applied to a container.
 * Some fields are present in both SecurityContext and PodSecurityContext.
 * When both are set, the values in SecurityContext take precedence.
 *
 * @package Kubernetes\Model
 */
class SecurityContext extends AbstractModel
{
    /**
     * @var Capabilities
     * The capabilities to add/drop when running containers.
     * Defaults to the default set of capabilities granted by the container runtime.
     */
    public $capabilities;

    /**
     * @var boolean
     * Run container in privileged mode.
     * Processes in privileged containers are essentially equivalent to root on the host.
     * Defaults to false.
     */
    public $privileged = false;

    /**
     * @var boolean
     * Whether this container has a read-only root filesystem. Default is false.
     */
    public $readOnlyRootFilesystem = false;

    /**
     * @var boolean
     * Indicates that the container must run as a non-root user.
     * If true, the Kubelet will validate the image at runtime to ensure that it does not run as UID 0 (root) and
     * fail to start the container if it does.
     * If unset or false, no such validation will be performed. May also be set in PodSecurityContext.
     * If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsNonRoot;

    /**
     * @var integer
     * The UID to run the entrypoint of the container process.
     * Defaults to user specified in image metadata if unspecified.
     * May also be set in PodSecurityContext.
     * If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $runAsUser;

    /**
     * @var SELinuxOptions
     * he SELinux context to be applied to the container.
     * If unspecified, the container runtime will allocate a random SELinux context for each container.
     * May also be set in PodSecurityContext.
     * If set in both SecurityContext and PodSecurityContext, the value specified in SecurityContext takes precedence.
     */
    public $seLinuxOptions;

    /**
     * @param Capabilities $capabilities
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $this->_createPropertyValue($capabilities, Capabilities::class, false);

        return $this;
    }

    /**
     * @param SELinuxOptions $seLinuxOptions
     *
     * @return self
     */
    public function setSeLinuxOptions($seLinuxOptions)
    {
        $this->seLinuxOptions = $this->_createPropertyValue($seLinuxOptions, SELinuxOptions::class, false);

        return $this;
    }

}