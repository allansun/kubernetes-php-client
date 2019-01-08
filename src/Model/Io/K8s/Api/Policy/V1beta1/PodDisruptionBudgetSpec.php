<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

/**
 * PodDisruptionBudgetSpec is a description of a PodDisruptionBudget.
 */
class PodDisruptionBudgetSpec extends \Kubernetes\AbstractModel
{

    /**
     * An eviction is allowed if at most "maxUnavailable" pods selected by "selector"
     * are unavailable after the eviction, i.e. even in absence of the evicted pod. For
     * example, one can prevent all voluntary evictions by specifying 0. This is a
     * mutually exclusive setting with "minAvailable".
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $maxUnavailable = null;

    /**
     * An eviction is allowed if at least "minAvailable" pods selected by "selector"
     * will still be available after the eviction, i.e. even in the absence of the
     * evicted pod.  So for example you can prevent all voluntary evictions by
     * specifying "100%".
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Util\Intstr\IntOrString
     */
    public $minAvailable = null;

    /**
     * Label query over pods whose evictions are managed by the disruption budget.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;


}

