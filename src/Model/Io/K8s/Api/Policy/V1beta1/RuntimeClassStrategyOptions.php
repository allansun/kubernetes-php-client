<?php

namespace Kubernetes\Model\Io\K8s\Api\Policy\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * RuntimeClassStrategyOptions define the strategy that will dictate the allowable
 * RuntimeClasses for a pod.
 */
class RuntimeClassStrategyOptions extends AbstractModel
{

    /**
     * allowedRuntimeClassNames is an allowlist of RuntimeClass names that may be
     * specified on a pod. A value of "*" means that any RuntimeClass name is allowed,
     * and must be the only item in the list. An empty list requires the
     * RuntimeClassName field to be unset.
     *
     * @var string[]
     */
    public $allowedRuntimeClassNames = null;

    /**
     * defaultRuntimeClassName is the default RuntimeClassName to set on the pod. The
     * default MUST be allowed by the allowedRuntimeClassNames list. A value of nil
     * does not mutate the Pod.
     *
     * @var string
     */
    public $defaultRuntimeClassName = null;


}

