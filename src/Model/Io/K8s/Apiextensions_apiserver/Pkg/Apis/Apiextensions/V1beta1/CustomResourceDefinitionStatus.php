<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionStatus indicates the state of the
 * CustomResourceDefinition
 */
class CustomResourceDefinitionStatus extends \Kubernetes\AbstractModel
{

    /**
     * AcceptedNames are the names that are actually being used to serve discovery They
     * may be different than the names in spec.
     *
     * @var CustomResourceDefinitionNames
     */
    public $acceptedNames = null;

    /**
     * Conditions indicate state for particular aspects of a CustomResourceDefinition
     *
     * @var CustomResourceDefinitionCondition[]
     */
    public $conditions = null;


}

