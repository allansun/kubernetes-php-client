<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * ManagedFieldsEntry is a workflow-id, a FieldSet and the group version of the
 * resource that the fieldset applies to.
 */
class ManagedFieldsEntry extends \KubernetesRuntime\AbstractModel
{

    /**
     * APIVersion defines the version of this resource that this field set applies to.
     * The format is "group/version" just like the top-level APIVersion field. It is
     * necessary to track the version of a field set because it cannot be automatically
     * converted.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * FieldsType is the discriminator for the different fields format and version.
     * There is currently only one possible value: "FieldsV1"
     *
     * @var string
     */
    public $fieldsType = null;

    /**
     * FieldsV1 holds the first JSON version format as described in the "FieldsV1"
     * type.
     *
     * @var FieldsV1
     */
    public $fieldsV1 = null;

    /**
     * Manager is an identifier of the workflow managing these fields.
     *
     * @var string
     */
    public $manager = null;

    /**
     * Operation is the type of operation which lead to this ManagedFieldsEntry being
     * created. The only valid values for this field are 'Apply' and 'Update'.
     *
     * @var string
     */
    public $operation = null;

    /**
     * Time is timestamp of when these fields were set. It should always be empty if
     * Operation is 'Apply'
     *
     * @var Time
     */
    public $time = null;


}

