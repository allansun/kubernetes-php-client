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

    /**
     * StoredVersions are all versions of CustomResources that were ever persisted.
     * Tracking these versions allows a migration path for stored versions in etcd. The
     * field is mutable so the migration controller can first finish a migration to
     * another version (i.e. that no old objects are left in the storage), and then
     * remove the rest of the versions from this list. None of the versions in this
     * list can be removed from the spec.Versions field.
     *
     * @var string[]
     */
    public $storedVersions = null;


}

