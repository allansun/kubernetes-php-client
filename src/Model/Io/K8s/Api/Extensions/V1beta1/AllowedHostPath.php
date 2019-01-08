<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * AllowedHostPath defines the host volume conditions that will be enabled by a
 * policy for pods to use. It requires the path prefix to be defined. Deprecated:
 * use AllowedHostPath from policy API Group instead.
 */
class AllowedHostPath extends \Kubernetes\AbstractModel
{

    /**
     * pathPrefix is the path prefix that the host volume must match. It does not
     * support `*`. Trailing slashes are trimmed when validating the path prefix with a
     * host path.
     *
     * Examples: `/foo` would allow `/foo`, `/foo/` and `/foo/bar` `/foo` would not
     * allow `/food` or `/etc/foo`
     *
     * @var string
     */
    public $pathPrefix = null;

    /**
     * when set to true, will allow host volumes matching the pathPrefix only if all
     * volume mounts are readOnly.
     *
     * @var boolean
     */
    public $readOnly = null;


}

