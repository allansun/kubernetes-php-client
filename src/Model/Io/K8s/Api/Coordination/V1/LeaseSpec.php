<?php

namespace Kubernetes\Model\Io\K8s\Api\Coordination\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LeaseSpec is a specification of a Lease.
 */
class LeaseSpec extends AbstractModel
{
    /**
     * acquireTime is a time when the current lease was acquired.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $acquireTime = null;

    /**
     * holderIdentity contains the identity of the holder of a current lease.
     *
     * @var string
     */
    public $holderIdentity = null;

    /**
     * leaseDurationSeconds is a duration that candidates for a lease need to wait to
     * force acquire it. This is measure against time of last observed RenewTime.
     *
     * @var integer
     */
    public $leaseDurationSeconds = null;

    /**
     * leaseTransitions is the number of transitions of a lease between holders.
     *
     * @var integer
     */
    public $leaseTransitions = null;

    /**
     * renewTime is a time when the current holder of a lease has last updated the
     * lease.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $renewTime = null;
}

