<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * PodSecurityContext holds pod-level security attributes and common container
 * settings. Some fields are also present in container.securityContext.  Field
 * values of container.securityContext take precedence over field values of
 * PodSecurityContext.
 */
class PodSecurityContext extends \KubernetesRuntime\AbstractModel
{

    /**
     * A special supplemental group that applies to all containers in a pod. Some
     * volume types allow the Kubelet to change the ownership of that volume to be
     * owned by the pod:
     *
     * 1. The owning GID will be the FSGroup 2. The setgid bit is set (new files
     * created in the volume will be owned by FSGroup) 3. The permission bits are OR'd
     * with rw-rw----
     *
     * If unset, the Kubelet will not modify the ownership and permissions of any
     * volume.
     *
     * @var integer
     */
    public $fsGroup = null;

    /**
     * fsGroupChangePolicy defines behavior of changing ownership and permission of the
     * volume before being exposed inside Pod. This field will only apply to volume
     * types which support fsGroup based ownership(and permissions). It will have no
     * effect on ephemeral volume types such as: secret, configmaps and emptydir. Valid
     * values are "OnRootMismatch" and "Always". If not specified defaults to "Always".
     *
     * @var string
     */
    public $fsGroupChangePolicy = null;

    /**
     * The GID to run the entrypoint of the container process. Uses runtime default if
     * unset. May also be set in SecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence for
     * that container.
     *
     * @var integer
     */
    public $runAsGroup = null;

    /**
     * Indicates that the container must run as a non-root user. If true, the Kubelet
     * will validate the image at runtime to ensure that it does not run as UID 0
     * (root) and fail to start the container if it does. If unset or false, no such
     * validation will be performed. May also be set in SecurityContext.  If set in
     * both SecurityContext and PodSecurityContext, the value specified in
     * SecurityContext takes precedence.
     *
     * @var boolean
     */
    public $runAsNonRoot = null;

    /**
     * The UID to run the entrypoint of the container process. Defaults to user
     * specified in image metadata if unspecified. May also be set in SecurityContext. 
     * If set in both SecurityContext and PodSecurityContext, the value specified in
     * SecurityContext takes precedence for that container.
     *
     * @var integer
     */
    public $runAsUser = null;

    /**
     * The SELinux context to be applied to all containers. If unspecified, the
     * container runtime will allocate a random SELinux context for each container. 
     * May also be set in SecurityContext.  If set in both SecurityContext and
     * PodSecurityContext, the value specified in SecurityContext takes precedence for
     * that container.
     *
     * @var SELinuxOptions
     */
    public $seLinuxOptions = null;

    /**
     * A list of groups applied to the first process run in each container, in addition
     * to the container's primary GID.  If unspecified, no groups will be added to any
     * container.
     *
     * @var integer[]|integer[]
     */
    public $supplementalGroups = null;

    /**
     * Sysctls hold a list of namespaced sysctls used for the pod. Pods with
     * unsupported sysctls (by the container runtime) might fail to launch.
     *
     * @var Sysctl[]
     */
    public $sysctls = null;

    /**
     * The Windows specific settings applied to all containers. If unspecified, the
     * options within a container's SecurityContext will be used. If set in both
     * SecurityContext and PodSecurityContext, the value specified in SecurityContext
     * takes precedence.
     *
     * @var WindowsSecurityContextOptions
     */
    public $windowsOptions = null;


}

