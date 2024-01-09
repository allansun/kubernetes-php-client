<?php

namespace Kubernetes\Model\Io\K8s\Api\Batch\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodFailurePolicyOnExitCodesRequirement describes the requirement for handling a
 * failed pod based on its container exit codes. In particular, it lookups the
 * .state.terminated.exitCode for each app container and init container status,
 * represented by the .status.containerStatuses and .status.initContainerStatuses
 * fields in the Pod status, respectively. Containers completed with success (exit
 * code 0) are excluded from the requirement check.
 */
class PodFailurePolicyOnExitCodesRequirement extends AbstractModel
{
    /**
     * Restricts the check for exit codes to the container with the specified name.
     * When null, the rule applies to all containers. When specified, it should match
     * one the container or initContainer names in the pod template.
     *
     * @var string
     */
    public $containerName = null;

    /**
     * Represents the relationship between the container exit code(s) and the specified
     * values. Containers completed with success (exit code 0) are excluded from the
     * requirement check. Possible values are: - In: the requirement is satisfied if at
     * least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is in the set of specified values.
     * - NotIn: the requirement is satisfied if at least one container exit code
     *   (might be multiple if there are multiple containers not restricted
     *   by the 'containerName' field) is not in the set of specified values.
     * Additional values are considered to be added in the future. Clients should react
     * to an unknown operator by assuming the requirement is not satisfied.
     *
     *
     *
     * @var string
     */
    public $operator = null;

    /**
     * Specifies the set of values. Each returned container exit code (might be
     * multiple in case of multiple containers) is checked against this set of values
     * with respect to the operator. The list of values must be ordered and must not
     * contain duplicates. Value '0' cannot be used for the In operator. At least one
     * element is required. At most 255 elements are allowed.
     *
     * @var integer[]|integer[]
     */
    public $values = null;
}

