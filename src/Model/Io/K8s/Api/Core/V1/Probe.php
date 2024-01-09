<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Probe describes a health check to be performed against a container to determine
 * whether it is alive or ready to receive traffic.
 */
class Probe extends AbstractModel
{
    /**
     * Exec specifies the action to take.
     *
     * @var ExecAction
     */
    public $exec = null;

    /**
     * Minimum consecutive failures for the probe to be considered failed after having
     * succeeded. Defaults to 3. Minimum value is 1.
     *
     * @var integer
     */
    public $failureThreshold = null;

    /**
     * GRPC specifies an action involving a GRPC port. This is a beta field and
     * requires enabling GRPCContainerProbe feature gate.
     *
     * @var GRPCAction
     */
    public $grpc = null;

    /**
     * HTTPGet specifies the http request to perform.
     *
     * @var HTTPGetAction
     */
    public $httpGet = null;

    /**
     * Number of seconds after the container has started before liveness probes are
     * initiated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @var integer
     */
    public $initialDelaySeconds = null;

    /**
     * How often (in seconds) to perform the probe. Default to 10 seconds. Minimum
     * value is 1.
     *
     * @var integer
     */
    public $periodSeconds = null;

    /**
     * Minimum consecutive successes for the probe to be considered successful after
     * having failed. Defaults to 1. Must be 1 for liveness and startup. Minimum value
     * is 1.
     *
     * @var integer
     */
    public $successThreshold = null;

    /**
     * TCPSocket specifies an action involving a TCP port.
     *
     * @var TCPSocketAction
     */
    public $tcpSocket = null;

    /**
     * Optional duration in seconds the pod needs to terminate gracefully upon probe
     * failure. The grace period is the duration in seconds after the processes running
     * in the pod are sent a termination signal and the time when the processes are
     * forcibly halted with a kill signal. Set this value longer than the expected
     * cleanup time for your process. If this value is nil, the pod's
     * terminationGracePeriodSeconds will be used. Otherwise, this value overrides the
     * value provided by the pod spec. Value must be non-negative integer. The value
     * zero indicates stop immediately via the kill signal (no opportunity to shut
     * down). This is a beta field and requires enabling ProbeTerminationGracePeriod
     * feature gate. Minimum value is 1. spec.terminationGracePeriodSeconds is used if
     * unset.
     *
     * @var integer
     */
    public $terminationGracePeriodSeconds = null;

    /**
     * Number of seconds after which the probe times out. Defaults to 1 second. Minimum
     * value is 1. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @var integer
     */
    public $timeoutSeconds = null;
}

