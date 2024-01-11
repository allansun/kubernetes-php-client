<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeResourceRequirements describes the storage resource requirements for a
 * volume.
 */
class VolumeResourceRequirements extends AbstractModel
{
    /**
     * Limits describes the maximum amount of compute resources allowed. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     *
     * @var object
     */
    public $limits = null;

    /**
     * Requests describes the minimum amount of compute resources required. If Requests
     * is omitted for a container, it defaults to Limits if that is explicitly
     * specified, otherwise to an implementation-defined value. Requests cannot exceed
     * Limits. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-resources-containers/
     *
     * @var object
     */
    public $requests = null;
}

