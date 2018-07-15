<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * Run A sUser Strategy Options defines the strategy type and any options used to
 * create the strategy.
 */
class RunAsUserStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * Ranges are the allowed ranges of uids that may be used.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * Rule is the strategy that will dictate the allowable RunAsUser values that may
     * be set.
     *
     * @var string
     */
    public $rule = null;


}

