<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceDefinitionStatus indicates the state of the
 * CustomResourceDefinition
 */
class CustomResourceDefinitionStatus extends AbstractModel
{

    /**
     * acceptedNames are the names that are actually being used to serve discovery.
     * They may be different than the names in spec.
     *
     * @var CustomResourceDefinitionNames
     */
    public $acceptedNames = null;

    /**
     * conditions indicate state for particular aspects of a CustomResourceDefinition
     *
     * @var CustomResourceDefinitionCondition[]
     */
    public $conditions = null;

    /**
     * storedVersions lists all versions of CustomResources that were ever persisted.
     * Tracking these versions allows a migration path for stored versions in etcd. The
     * field is mutable so a migration controller can finish a migration to another
     * version (ensuring no old objects are left in storage), and then remove the rest
     * of the versions from this list. Versions may not be removed from `spec.versions`
     * while they exist in this list.
     *
     * @var string[]
     */
    public $storedVersions = null;


}

