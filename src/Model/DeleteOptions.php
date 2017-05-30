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


/**
 * DeleteOptions may be provided when deleting an API object.
 *
 * @package Kubernetes\Model
 */
class DeleteOptions extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var integer
     * The duration in seconds before the object should be deleted.
     * Value must be non-negative integer. The value zero indicates delete immediately.
     * If this value is nil, the default grace period for the specified type will be used.
     * Defaults to a per object value if not specified. zero means delete immediately.
     */
    public $gracePeriodSeconds;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to.
     * Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var string
     * @deprecated 1.7
     * Deprecated: please use the PropagationPolicy, this field will be deprecated in 1.7.
     * Should the dependent objects be orphaned.
     * If true/false, the "orphan" finalizer will be added to/removed from the object's finalizers list.
     * Either this field or PropagationPolicy may be set, but not both.
     */
    public $orphanDependents;

    /**
     * @var Preconditions
     * Must be fulfilled before a deletion is carried out. If not possible, a 409 Conflict status will be returned.
     */
    public $preconditions;

    /**
     * @var string
     * Whether and how garbage collection will be performed. Defaults to Default.
     * Either this field or OrphanDependents may be set, but not both.
     */
    public $propagationPolicy;

    /**
     * @param Preconditions $preconditions
     *
     * @return self
     */
    public function setPreconditions($preconditions)
    {
        $this->preconditions = $this->_createPropertyValue($preconditions, Preconditions::class, false);

        return $this;
    }

}