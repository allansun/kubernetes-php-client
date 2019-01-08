<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * Pod Security Policy Spec defines the policy enforced.
 */
class PodSecurityPolicySpec extends \Kubernetes\AbstractModel
{

    /**
     * AllowPrivilegeEscalation determines if a pod can request to allow privilege
     * escalation. If unspecified, defaults to true.
     *
     * @var boolean
     */
    public $allowPrivilegeEscalation = null;

    /**
     * AllowedCapabilities is a list of capabilities that can be requested to add to
     * the container. Capabilities in this field may be added at the pod author's
     * discretion. You must not list a capability in both AllowedCapabilities and
     * RequiredDropCapabilities.
     *
     * @var string[]
     */
    public $allowedCapabilities = null;

    /**
     * AllowedFlexVolumes is a whitelist of allowed Flexvolumes.  Empty or nil
     * indicates that all Flexvolumes may be used.  This parameter is effective only
     * when the usage of the Flexvolumes is allowed in the "Volumes" field.
     *
     * @var AllowedFlexVolume[]
     */
    public $allowedFlexVolumes = null;

    /**
     * is a white list of allowed host paths. Empty indicates that all host paths may
     * be used.
     *
     * @var AllowedHostPath[]
     */
    public $allowedHostPaths = null;

    /**
     * DefaultAddCapabilities is the default set of capabilities that will be added to
     * the container unless the pod spec specifically drops the capability.  You may
     * not list a capability in both DefaultAddCapabilities and
     * RequiredDropCapabilities. Capabilities added here are implicitly allowed, and
     * need not be included in the AllowedCapabilities list.
     *
     * @var string[]
     */
    public $defaultAddCapabilities = null;

    /**
     * DefaultAllowPrivilegeEscalation controls the default setting for whether a
     * process can gain more privileges than its parent process.
     *
     * @var boolean
     */
    public $defaultAllowPrivilegeEscalation = null;

    /**
     * FSGroup is the strategy that will dictate what fs group is used by the
     * SecurityContext.
     *
     * @var FSGroupStrategyOptions
     */
    public $fsGroup = null;

    /**
     * hostIPC determines if the policy allows the use of HostIPC in the pod spec.
     *
     * @var boolean
     */
    public $hostIPC = null;

    /**
     * hostNetwork determines if the policy allows the use of HostNetwork in the pod
     * spec.
     *
     * @var boolean
     */
    public $hostNetwork = null;

    /**
     * hostPID determines if the policy allows the use of HostPID in the pod spec.
     *
     * @var boolean
     */
    public $hostPID = null;

    /**
     * hostPorts determines which host port ranges are allowed to be exposed.
     *
     * @var HostPortRange[]
     */
    public $hostPorts = null;

    /**
     * privileged determines if a pod can request to be run as privileged.
     *
     * @var boolean
     */
    public $privileged = null;

    /**
     * ReadOnlyRootFilesystem when set to true will force containers to run with a read
     * only root file system.  If the container specifically requests to run with a
     * non-read only root file system the PSP should deny the pod. If set to false the
     * container may run with a read only root file system if it wishes but it will not
     * be forced to.
     *
     * @var boolean
     */
    public $readOnlyRootFilesystem = null;

    /**
     * RequiredDropCapabilities are the capabilities that will be dropped from the
     * container.  These are required to be dropped and cannot be added.
     *
     * @var string[]
     */
    public $requiredDropCapabilities = null;

    /**
     * runAsUser is the strategy that will dictate the allowable RunAsUser values that
     * may be set.
     *
     * @var RunAsUserStrategyOptions
     */
    public $runAsUser = null;

    /**
     * seLinux is the strategy that will dictate the allowable labels that may be set.
     *
     * @var SELinuxStrategyOptions
     */
    public $seLinux = null;

    /**
     * SupplementalGroups is the strategy that will dictate what supplemental groups
     * are used by the SecurityContext.
     *
     * @var SupplementalGroupsStrategyOptions
     */
    public $supplementalGroups = null;

    /**
     * volumes is a white list of allowed volume plugins.  Empty indicates that all
     * plugins may be used.
     *
     * @var string[]
     */
    public $volumes = null;


}

