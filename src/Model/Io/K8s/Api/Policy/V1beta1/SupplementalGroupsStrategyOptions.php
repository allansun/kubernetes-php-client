<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * SupplementalGroupsStrategyOptions defines the strategy type and options used to
 * create the strategy.
 */
class SupplementalGroupsStrategyOptions extends AbstractModel
{

    /**
     * ranges are the allowed ranges of supplemental groups.  If you would like to
     * force a single supplemental group then supply a single range with the same start
     * and end. Required for MustRunAs.
     *
     * @var IDRange[]
     */
    public $ranges = null;

    /**
     * rule is the strategy that will dictate what supplemental groups is used in the
     * SecurityContext.
     *
     * @var string
     */
    public $rule = null;


}

