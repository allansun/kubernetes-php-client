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
 * A single application container that you want to run within a pod.
 *
 * @package Kubernetes\Model
 */
class Container extends AbstractModel
{
    /**
     * @var string[]
     * Arguments to the entrypoint. The docker image's CMD is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's environment.
     * If a variable cannot be resolved, the reference in the input string will be unchanged.
     * The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME).
     * Escaped references will never be expanded, regardless of whether the variable exists or not.
     * Cannot be updated.
     * More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     */
    public $args;

    /**
     * @var string[]
     * Entrypoint array. Not executed within a shell.
     * The docker image's ENTRYPOINT is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's environment.
     * If a variable cannot be resolved, the reference in the input string will be unchanged.
     * The $(VAR_NAME) syntax can be escaped with a double $$, ie: $$(VAR_NAME).
     * Escaped references will never be expanded, regardless of whether the variable exists or not.
     * Cannot be updated.
     * More info: http://kubernetes.io/docs/user-guide/containers#containers-and-commands
     */
    public $command;

    /**
     * @var EnvVar[]
     * List of environment variables to set in the container. Cannot be updated.
     */
    public $env;

    /**
     * @var EnvFromSource[]
     * List of sources to populate environment variables in the container.
     * The keys defined within a source must be a C_IDENTIFIER.
     * All invalid keys will be reported as an event when the container is starting.
     * When a key exists in multiple sources, the value associated with the last source will take precedence.
     * Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
     */
    public $envFrom;

    /**
     * @var string
     * Docker image name. More info: http://kubernetes.io/docs/user-guide/images
     */
    public $image;

    /**
     * @var string
     * Image pull policy. One of Always, Never, IfNotPresent.
     * Defaults to Always if :latest tag is specified, or IfNotPresent otherwise.
     * Cannot be updated. More info: http://kubernetes.io/docs/user-guide/images#updating-images
     */
    public $imagePullPolicy;

    /**
     * @var Lifecycle
     * Actions that the management system should take in response to container lifecycle events. Cannot be updated.
     */
    public $lifecycle;

    /**
     * @var Probe
     * Periodic probe of container liveness. Container will be restarted if the probe fails.
     * Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     */
    public $livenessProbe;

    /**
     * @var string
     * Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name (DNS_LABEL).
     * Cannot be updated.
     */
    public $name;

    /**
     * @var ContainerPort[]
     * List of ports to expose from the container. Exposing a port here gives the system additional information
     * about the network connections a container uses, but is primarily informational.
     * Not specifying a port here DOES NOT prevent that port from being exposed.
     * Any port which is listening on the default "0.0.0.0" address inside a container will be accessible from
     * the network. Cannot be updated.
     */
    public $ports;

    /**
     * @var Probe
     * Periodic probe of container service readiness.
     * Container will be removed from service endpoints if the probe fails.
     * Cannot be updated. More info: http://kubernetes.io/docs/user-guide/pod-states#container-probes
     */
    public $readinessProbe;

    /**
     * @var ResourceRequirements
     * Compute Resources required by this container.
     * Cannot be updated. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#resources
     */
    public $resources;

    /**
     * @var SecurityContext
     * Security options the pod should run with. More info: http://releases.k8s.io/HEAD/docs/design/security_context.md
     */
    public $securityContext;

    /**
     * @var boolean
     * Whether this container should allocate a buffer for stdin in the container runtime.
     * If this is not set, reads from stdin in the container will always result in EOF. Default is false.
     */
    public $stdin = false;

    /**
     * @var boolean
     * Whether the container runtime should close the stdin channel after it has been opened by a single attach.
     * When stdin is true the stdin stream will remain open across multiple attach sessions.
     * If stdinOnce is set to true, stdin is opened on container start, is empty until the first client attaches
     * to stdin, and then remains open and accepts data until the client disconnects, at which time stdin is closed
     * and remains closed until the container is restarted. If this flag is false, a container processes that reads
     * from stdin will never receive an EOF.
     * Default is false
     */
    public $stdinOnce = false;

    /**
     * @var string
     * Optional: Path at which the file to which the container's termination message will be written is mounted into
     * the container's filesystem. Message written is intended to be brief final status, such as an assertion failure
     * message. Will be truncated by the node if greater than 4096 bytes. The total message length across all
     * containers will be limited to 12kb. Defaults to /dev/termination-log. Cannot be updated.
     */
    public $terminationMessagePath = '/dev/termination-log';

    /**
     * @var string
     * Indicate how the termination message should be populated.
     * File will use the contents of terminationMessagePath to populate the container status message on both
     * success and failure.
     * FallbackToLogsOnError will use the last chunk of container log output if the termination message file is empty
     * and the container exited with an error.
     * The log output is limited to 2048 bytes or 80 lines, whichever is smaller.
     * Defaults to File. Cannot be updated.
     */
    public $terminationMessagePolicy = 'File';

    /**
     * @var boolean
     * Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default is false.
     */
    public $tty = false;

    /**
     * @var VolumeMount[]
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
     */
    public $volumeMounts;

    /**
     * @var string
     * Container's working directory. If not specified, the container runtime's default will be used, which might be
     * configured in the container image. Cannot be updated.
     */
    public $workingDir;

    /**
     * @param EnvVar[] $env
     *
     * @return self
     */
    public function setEnv($env)
    {
        $this->env = $this->_createPropertyValue($env, EnvVar::class, true);

        return $this;
    }

    /**
     * @param EnvFromSource[] $envFrom
     *
     * @return self
     */
    public function setEnvFrom($envFrom)
    {
        $this->envFrom = $this->_createPropertyValue($envFrom, EnvFromSource::class, true);

        return $this;
    }

    /**
     * @param Lifecycle $lifecycle
     *
     * @return self
     */
    public function setLifecycle($lifecycle)
    {
        $this->lifecycle = $this->_createPropertyValue($lifecycle, Lifecycle::class, false);

        return $this;
    }

    /**
     * @param Probe $livenessProbe
     *
     * @return self
     */
    public function setLivenessProbe($livenessProbe)
    {
        $this->livenessProbe = $this->_createPropertyValue($livenessProbe, Probe::class, false);

        return $this;
    }

    /**
     * @param ContainerPort[] $ports
     *
     * @return self
     */
    public function setPorts($ports)
    {
        $this->ports = $this->_createPropertyValue($ports, ContainerPort::class, true);

        return $this;
    }

    /**
     * @param Probe $readinessProbe
     *
     * @return self
     */
    public function setReadinessProbe($readinessProbe)
    {
        $this->readinessProbe = $this->_createPropertyValue($readinessProbe, Probe::class, false);

        return $this;
    }

    /**
     * @param ResourceRequirements $resources
     *
     * @return self
     */
    public function setResources($resources)
    {
        $this->resources = $this->_createPropertyValue($resources, ResourceRequirements::class, false);

        return $this;
    }

    /**
     * @param SecurityContext $securityContext
     *
     * @return self
     */
    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $this->_createPropertyValue($securityContext, SecurityContext::class, false);

        return $this;
    }

    /**
     * @param VolumeMount[] $volumeMounts
     *
     * @return self
     */
    public function setVolumeMounts($volumeMounts)
    {
        $this->volumeMounts = $this->_createPropertyValue($volumeMounts, VolumeMount::class, true);

        return $this;
    }
}