<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * OwnerReference contains enough information to let you identify an owning object.
 * Currently, an owning object must be in the same namespace, so there is no
 * namespace field.
 */
class OwnerReference extends \Kubernetes\AbstractModel
{

    /**
     * API version of the referent.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then the owner
     * cannot be deleted from the key-value store until this reference is removed.
     * Defaults to false. To set this field, a user needs "delete" permission of the
     * owner, otherwise 422 (Unprocessable Entity) will be returned.
     *
     * @var boolean
     */
    public $blockOwnerDeletion = null;

    /**
     * If true, this reference points to the managing controller.
     *
     * @var boolean
     */
    public $controller = null;

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = null;

    /**
     * Name of the referent. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @var string
     */
    public $name = null;

    /**
     * UID of the referent. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#uids
     *
     * @var string
     */
    public $uid = null;


}

