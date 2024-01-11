<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * GroupVersion contains the "group/version" and "version" string of a version. It
 * is made a struct to keep extensibility.
 */
class GroupVersionForDiscovery extends AbstractModel
{
    /**
     * groupVersion specifies the API group and version in the form "group/version"
     *
     * @var string
     */
    public $groupVersion = null;

    /**
     * version specifies the version in the form of "version". This is to save the
     * clients the trouble of splitting the GroupVersion.
     *
     * @var string
     */
    public $version = null;
}

