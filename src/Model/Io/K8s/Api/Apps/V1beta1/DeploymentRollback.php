<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta1;

/**
 * DEPRECATED. DeploymentRollback stores the information required to rollback a
 * deployment.
 */
class DeploymentRollback extends \Kubernetes\AbstractModel
{

    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'apps/v1beta1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'DeploymentRollback';

    /**
     * Required: This must match the Name of a deployment.
     *
     * @var string
     */
    public $name = null;

    /**
     * The config of this deployment rollback.
     *
     * @var RollbackConfig
     */
    public $rollbackTo = null;

    /**
     * The annotations to be updated to a deployment
     *
     * @var object
     */
    public $updatedAnnotations = null;


}

