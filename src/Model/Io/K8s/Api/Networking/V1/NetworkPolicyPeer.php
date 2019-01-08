<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

/**
 * NetworkPolicyPeer describes a peer to allow traffic from. Exactly one of its
 * fields must be specified.
 */
class NetworkPolicyPeer extends \Kubernetes\AbstractModel
{

    /**
     * IPBlock defines policy on a particular IPBlock
     *
     * @var IPBlock
     */
    public $ipBlock = null;

    /**
     * Selects Namespaces using cluster scoped-labels. This matches all pods in all
     * namespaces selected by this label selector. This field follows standard label
     * selector semantics. If present but empty, this selector selects all namespaces.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $namespaceSelector = null;

    /**
     * This is a label selector which selects Pods in this namespace. This field
     * follows standard label selector semantics. If present but empty, this selector
     * selects all pods in this namespace.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $podSelector = null;


}

