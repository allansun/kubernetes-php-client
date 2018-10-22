<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * RunAsUserStrategyOptions defines the strategy type and any options used to
 * create the strategy.
 */
class RunAsUserStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * ranges are the allowed ranges of uids that may be used. If you would like to
     * force a single uid then supply a single range with the same start and end.
     * Required for MustRunAs.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * rule is the strategy that will dictate the allowable RunAsUser values that may
     * be set.
     *
     * @var string
     */
    public $rule = null;


}

