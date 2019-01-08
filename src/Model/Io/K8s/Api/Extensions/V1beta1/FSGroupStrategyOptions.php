<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * FSGroupStrategyOptions defines the strategy type and options used to create the
 * strategy. Deprecated: use FSGroupStrategyOptions from policy API Group instead.
 */
class FSGroupStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * ranges are the allowed ranges of fs groups.  If you would like to force a single
     * fs group then supply a single range with the same start and end. Required for
     * MustRunAs.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * rule is the strategy that will dictate what FSGroup is used in the
     * SecurityContext.
     *
     * @var string
     */
    public $rule = null;


}

