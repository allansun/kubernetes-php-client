<?php

namespace Kubernetes\Model\Io\K8s\Api\Rbac\V1;

/**
 * AggregationRule describes how to locate ClusterRoles to aggregate into the
 * ClusterRole
 */
class AggregationRule extends \Kubernetes\AbstractModel
{

    /**
     * ClusterRoleSelectors holds a list of selectors which will be used to find
     * ClusterRoles and create the rules. If any of the selectors match, then the
     * ClusterRole's permissions will be added
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector[]
     */
    public $clusterRoleSelectors = null;


}

