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


class PodDisruptionBudgetStatus extends AbstractModel
{
    /**
     * @var integer
     * current number of healthy pods
     */
    public $currentHealthy;

    /**
     * @var integer
     * minimum desired number of healthy pods
     */
    public $desiredHealthy;

    /**
     * @var \StdClass
     * DisruptedPods contains information about pods whose eviction was processed by the API server eviction
     * subresource handler but has not yet been observed by the PodDisruptionBudget controller. A pod will be in this
     * map from the time when the API server processed the eviction request to the time when the pod is seen by PDB
     * controller as having been marked for deletion (or after a timeout). The key in the map is the name of the pod
     * and the value is the time when the API server processed the eviction request. If the deletion didn't occur and a
     * pod is still there it will be removed from the list automatically by PodDisruptionBudget controller after some
     * time. If everything goes smooth this map should be empty for the most of the time. Large number of entries in
     * the map may indicate problems with pod deletions.
     */
    public $disruptedPods;

    /**
     * @var integer
     * DisruptedPods contains information about pods whose eviction was processed by the API server eviction
     * subresource handler but has not yet been observed by the PodDisruptionBudget controller. A pod will be in this
     * map from the time when the API server processed the eviction request to the time when the pod is seen by PDB
     * controller as having been marked for deletion (or after a timeout). The key in the map is the name of the pod
     * and the value is the time when the API server processed the eviction request. If the deletion didn't occur and a
     * pod is still there it will be removed from the list automatically by PodDisruptionBudget controller after some
     * time. If everything goes smooth this map should be empty for the most of the time. Large number of entries in
     * the map may indicate problems with pod deletions.
     */
    public $disruptionsAllowed;

    /**
     * @var integer
     * DisruptedPods contains information about pods whose eviction was processed by the API server eviction
     * subresource handler but has not yet been observed by the PodDisruptionBudget controller. A pod will be in this
     * map from the time when the API server processed the eviction request to the time when the pod is seen by PDB
     * controller as having been marked for deletion (or after a timeout). The key in the map is the name of the pod
     * and the value is the time when the API server processed the eviction request. If the deletion didn't occur and a
     * pod is still there it will be removed from the list automatically by PodDisruptionBudget controller after some
     * time. If everything goes smooth this map should be empty for the most of the time. Large number of entries in
     * the map may indicate problems with pod deletions.
     */
    public $expectedPods;

    /**
     * @var integer
     * Most recent generation observed when updating this PDB status. PodDisruptionsAllowed and other status informatio
     * is valid only if observedGeneration equals to PDB's object generation.
     */
    public $observedGeneration;

}