<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


use Kubernetes\Model\Tag\Version;

/**
 * OwnerReference contains enough information to let you identify an owning object.
 * Currently, an owning object must be in the same namespace, so there is no namespace field.
 *
 * @package Kubernetes\Model
 */
class OwnerReference extends AbstractModel
{
    /**
     * @var string
     * API version of the referent.
     */
    public $apiVersion = Version::V1;

    /**
     * @var boolean
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then the owner cannot be deleted
     * from the key-value store until this reference is removed. Defaults to false.
     * To set this field, a user needs "delete" permission of the owner, otherwise 422 (Unprocessable Entity)
     * will be returned.
     */
    public $blockOwnerDeletion = false;

    /**
     * @var boolean
     * If true, this reference points to the managing controller.
     */
    public $controller = false;

    /**
     * @var string
     * Kind of the referent. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'OwnerReference';

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var string
     * UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public $uid;
}