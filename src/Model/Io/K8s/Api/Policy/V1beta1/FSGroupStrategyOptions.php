<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * FSGroupStrategyOptions defines the strategy type and options used to create the
 * strategy.
 */
class FSGroupStrategyOptions extends \Kubernetes\AbstractModel
{

    /**
     * Ranges are the allowed ranges of fs groups.  If you would like to force a single
     * fs group then supply a single range with the same start and end.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * Rule is the strategy that will dictate what FSGroup is used in the
     * SecurityContext.
     *
     * @var string
     */
    public $rule = null;


}

