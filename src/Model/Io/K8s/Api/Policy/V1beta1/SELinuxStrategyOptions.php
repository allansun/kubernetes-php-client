<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * SELinuxStrategyOptions defines the strategy type and any options used to create
 * the strategy.
 */
class SELinuxStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * rule is the strategy that will dictate the allowable labels that may be set.
     *
     * @var string
     */
    public $rule = null;

    /**
     * seLinuxOptions required to run as; required for MustRunAs More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\SELinuxOptions
     */
    public $seLinuxOptions = null;


}

