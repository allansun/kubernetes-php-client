<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

use \KubernetesRuntime\AbstractModel;

class SelfSubjectRulesReviewSpec extends AbstractModel
{

    /**
     * Namespace to evaluate rules for. Required.
     *
     * @var string
     */
    public $namespace = null;


}

