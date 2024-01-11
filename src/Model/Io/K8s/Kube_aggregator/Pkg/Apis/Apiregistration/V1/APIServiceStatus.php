<?php

namespace Kubernetes\Model\Io\K8s\Kube_aggregator\Pkg\Apis\Apiregistration\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * APIServiceStatus contains derived information about an API server
 */
class APIServiceStatus extends AbstractModel
{
    /**
     * Current service state of apiService.
     *
     * @var APIServiceCondition[]
     */
    public $conditions = null;
}

