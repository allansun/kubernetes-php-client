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


class PodSpec extends AbstractModel
{
    /**
     * @var integer
     * Optional duration in seconds the pod may be active on the node relative to StartTime before the system will
     * actively try to mark it failed and kill associated containers. Value must be a positive integer.
     */
    public $activeDeadlineSeconds;

    /**
     * @var Affinity
     * If specified, the pod's scheduling constraints
     */
    public $affinity;

    /**
     * @var boolean
     * AutomountServiceAccountToken indicates whether a service account token should be automatically mounted.
     */
    public $automountServiceAccountToken;

    /**
     * @var Container[]
     * List of containers belonging to the pod. Containers cannot currently be added or removed. There must be at least
     * one container in a Pod. Cannot be updated.
     * More info: http://kubernetes.io/docs/user-guide/containers
     */
    public $containers;

    /**
     * @var string
     * Set DNS policy for containers within the pod. One of 'ClusterFirstWithHostNet', 'ClusterFirst' or 'Default'.
     * Defaults to "ClusterFirst". To have DNS options set along with hostNetwork, you have to specify DNS policy
     * explicitly to 'ClusterFirstWithHostNet'.
     */
    public $dnsPolicy = 'ClusterFirst';

    /**
     * @var boolean
     * Use the host's ipc namespace. Optional: Default to false.
     */
    public $hostIPC = false;

    /**
     * @var boolean
     * Host networking requested for this pod. Use the host's network namespace.
     * If this option is set, the ports that will be used must be specified. Default to false.
     */
    public $hostNetwork = false;

    /**
     * @var boolean
     * Use the host's pid namespace. Optional: Default to false.
     */
    public $hostPID = false;

    /**
     * @var string
     * Specifies the hostname of the Pod If not specified, the pod's hostname will be set to a system-defined value.
     */
    public $hostname;

    /**
     * @var LocalObjectReference[]
     * ImagePullSecrets is an optional list of references to secrets in the same namespace to use for pulling any of
     * the images used by this PodSpec. If specified, these secrets will be passed to individual puller implementations
     * for them to use. For example, in the case of docker, only DockerConfig type secrets are honored.
     * More info: http://kubernetes.io/docs/user-guide/images#specifying-imagepullsecrets-on-a-pod
     */
    public $imagePullSecrets;

    /**
     * @var Container[]
     * List of initialization containers belonging to the pod. Init containers are executed in order prior to
     * containers being started. If any init container fails, the pod is considered to have failed and is handled
     * according to its restartPolicy. The name for an init container or normal container must be unique among all
     * containers. Init containers may not have Lifecycle actions, Readiness probes, or Liveness probes.
     * The resourceRequirements of an init container are taken into account during scheduling by finding the highest
     * request/limit for each resource type, and then using the max of of that value or the sum of the
     * normal containers. Limits are applied to init containers in a similar fashion.
     * Init containers cannot currently be added or removed. Cannot be updated.
     * More info: http://kubernetes.io/docs/user-guide/containers
     */
    public $initContainers;

    /**
     * @var string
     * NodeName is a request to schedule this pod onto a specific node.
     * If it is non-empty, the scheduler simply schedules this pod onto that node,
     * assuming that it fits resource requirements.
     */
    public $nodeName;

    /**
     * @var object
     * NodeSelector is a selector which must be true for the pod to fit on a node.
     * Selector which must match a node's labels for the pod to be scheduled on that node.
     * More info: http://kubernetes.io/docs/user-guide/node-selection/README
     */
    public $nodeSelector;

    /**
     * @var string
     * Restart policy for all containers within the pod. One of Always, OnFailure, Never. Default to Always.
     * More info: http://kubernetes.io/docs/user-guide/pod-states#restartpolicy
     */
    public $restartPolicy = 'Always';

    /**
     * @var string
     * If specified, the pod will be dispatched by specified scheduler.
     * If not specified, the pod will be dispatched by default scheduler.
     */
    public $schedulerName;

    /**
     * @var PodSecurityContext
     * SecurityContext holds pod-level security attributes and common container settings. Optional: Defaults to empty.
     * See type description for default values of each field.
     */
    public $securityContext;

    /**
     * @var string
     * @deprecated
     * ServiceAccount is a depreciated alias for ServiceAccountName. Deprecated: Use serviceAccountName instead.
     */
    public $serviceAccount;

    /**
     * @var string
     * ServiceAccountName is the name of the ServiceAccount to use to run this pod.
     * More info: http://releases.k8s.io/HEAD/docs/design/service_accounts.md
     */
    public $serviceAccountName;

    /**
     * @var string
     * If specified, the fully qualified Pod hostname will be "...svc.".
     * If not specified, the pod will not have a domainname at all.
     */
    public $subdomain;

    /**
     * @var integer
     * Optional duration in seconds the pod needs to terminate gracefully. May be decreased in delete request.
     * Value must be non-negative integer. The value zero indicates delete immediately.
     * If this value is nil, the default grace period will be used instead. The grace period is the duration in
     * seconds after the processes running in the pod are sent a termination signal and the time when the processes
     * are forcibly halted with a kill signal. Set this value longer than the expected cleanup time for your process.
     * Defaults to 30 seconds.
     */
    public $terminationGracePeriodSeconds = 30;

    /**
     * @var Toleration[]
     * If specified, the pod's tolerations.
     */
    public $tolerations;

    /**
     * @var Volume[]
     * List of volumes that can be mounted by containers belonging to the pod.
     * More info: http://kubernetes.io/docs/user-guide/volumes
     */
    public $volumes;

    /**
     * @param Affinity $affinity
     *
     * @return self
     */
    public function setAffinity($affinity)
    {
        $this->affinity = new Affinity($affinity);

        return $this;
    }

    /**
     * @param Container[] $containers
     *
     * @return self
     */
    public function setContainers($containers)
    {
        $this->containers = $this->_createPropertyValue($containers, Container::class, true);

        return $this;
    }

    /**
     * @param LocalObjectReference[] $imagePullSecrets
     *
     * @return self
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->imagePullSecrets = $this->_createPropertyValue($imagePullSecrets, LocalObjectReference::class, true);

        return $this;
    }

    /**
     * @param Container[] $initContainers
     *
     * @return self
     */
    public function setInitContainers($initContainers)
    {
        $this->initContainers = $this->_createPropertyValue($initContainers, Container::class, true);

        return $this;
    }

    /**
     * @param PodSecurityContext $securityContext
     *
     * @return self
     */
    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $this->_createPropertyValue($securityContext, PodSecurityContext::class, false);

        return $this;
    }

    /**
     * @param Toleration[] $tolerations
     *
     * @return self
     */
    public function setTolerations($tolerations)
    {
        $this->tolerations = $this->_createPropertyValue($tolerations, Toleration::class, true);

        return $this;
    }

    /**
     * @param Volume[] $volumes
     *
     * @return self
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $this->_createPropertyValue($volumes, Volume::class, true);

        return $this;
    }


}