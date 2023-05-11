<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Represents a Quobyte mount that lasts the lifetime of a pod. Quobyte volumes do
 * not support ownership management or SELinux relabeling.
 */
class QuobyteVolumeSource extends AbstractModel
{

    /**
     * group to map volume access to Default is no group
     *
     * @var string
     */
    public $group = null;

    /**
     * readOnly here will force the Quobyte volume to be mounted with read-only
     * permissions. Defaults to false.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * registry represents a single or multiple Quobyte Registry services specified as
     * a string as host:port pair (multiple entries are separated with commas) which
     * acts as the central registry for volumes
     *
     * @var string
     */
    public $registry = null;

    /**
     * tenant owning the given Quobyte volume in the Backend Used with dynamically
     * provisioned Quobyte volumes, value is set by the plugin
     *
     * @var string
     */
    public $tenant = null;

    /**
     * user to map volume access to Defaults to serivceaccount user
     *
     * @var string
     */
    public $user = null;

    /**
     * volume is a string that references an already created Quobyte volume by name.
     *
     * @var string
     */
    public $volume = null;


}

