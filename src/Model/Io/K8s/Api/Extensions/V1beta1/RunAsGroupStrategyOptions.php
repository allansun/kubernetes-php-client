<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * RunAsGroupStrategyOptions defines the strategy type and any options used to
 * create the strategy. Deprecated: use RunAsGroupStrategyOptions from policy API
 * Group instead.
 */
class RunAsGroupStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * ranges are the allowed ranges of gids that may be used. If you would like to
     * force a single gid then supply a single range with the same start and end.
     * Required for MustRunAs.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * rule is the strategy that will dictate the allowable RunAsGroup values that may
     * be set.
     *
     * @var string
     */
    public $rule = null;


}

