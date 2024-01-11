<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Version;

use \KubernetesRuntime\AbstractModel;

/**
 * Info contains versioning information. how we'll want to distribute that
 * information.
 */
class Info extends AbstractModel
{
    /**
     * @var string
     */
    public $buildDate = null;

    /**
     * @var string
     */
    public $compiler = null;

    /**
     * @var string
     */
    public $gitCommit = null;

    /**
     * @var string
     */
    public $gitTreeState = null;

    /**
     * @var string
     */
    public $gitVersion = null;

    /**
     * @var string
     */
    public $goVersion = null;

    /**
     * @var string
     */
    public $major = null;

    /**
     * @var string
     */
    public $minor = null;

    /**
     * @var string
     */
    public $platform = null;
}

