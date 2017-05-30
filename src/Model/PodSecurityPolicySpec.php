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


class PodSecurityPolicySpec extends AbstractModel
{
    /**
     * @var string[]
     */
    public $allowedCapabilities;

    /**
     * @var string[]
     */
    public $defaultAddCapabilities;

    /**
     * @var FSGroupStrategyOptions
     */
    public $fsGroup;

    /**
     * @var boolean
     */
    public $hostIPC;

    /**
     * @var boolean
     */
    public $hostNetwork;

    /**
     * @var boolean
     */
    public $hostPID;

    /**
     * @var HostPortRange[]
     */
    public $hostPorts;

    /**
     * @var boolean
     */
    public $privileged;

    /**
     * @var boolean
     */
    public $readOnlyRootFilesystem;

    /**
     * @var string[]
     */
    public $requiredDropCapabilities;

    /**
     * @var RunAsUserStrategyOptions
     */
    public $runAsUser;

    /**
     * @var SELinuxStrategyOptions
     */
    public $seLinux;

    /**
     * @var SupplementalGroupsStrategyOptions
     */
    public $supplementalGroups;

    /**
     * @var string
     */
    public $volumes;

    /**
     * @param FSGroupStrategyOptions $fsGroup
     *
     * @return self
     */
    public function setFsGroup($fsGroup)
    {
        $this->fsGroup = $this->_createPropertyValue($fsGroup, FSGroupStrategyOptions::class, false);

        return $this;
    }

    /**
     * @param HostPortRange[] $hostPorts
     *
     * @return self
     */
    public function setHostPorts($hostPorts)
    {
        $this->hostPorts = $this->_createPropertyValue($hostPorts, HostPortRange::class, true);

        return $this;
    }

    /**
     * @param RunAsUserStrategyOptions $runAsUser
     *
     * @return self
     */
    public function setRunAsUser($runAsUser)
    {
        $this->runAsUser = $this->_createPropertyValue($runAsUser, RunAsUserStrategyOptions::class, false);

        return $this;
    }

    /**
     * @param SELinuxStrategyOptions $seLinux
     *
     * @return self
     */
    public function setSeLinux($seLinux)
    {
        $this->seLinux = $this->_createPropertyValue($seLinux, SELinuxStrategyOptions::class, false);

        return $this;
    }

    /**
     * @param SupplementalGroupsStrategyOptions $supplementalGroups
     *
     * @return self
     */
    public function setSupplementalGroups($supplementalGroups)
    {
        $this->supplementalGroups =
            $this->_createPropertyValue($supplementalGroups, SupplementalGroupsStrategyOptions::class, false);

        return $this;
    }
}