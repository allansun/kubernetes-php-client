<?php

namespace Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1;

/**
 * DEPRECATED 1.9 - This group version of NetworkPolicyPeer is deprecated by
 * networking/v1/NetworkPolicyPeer.
 *
 * @deprecated
 */
class NetworkPolicyPeer extends \Kubernetes\AbstractModel
{

    /**
     * IPBlock defines policy on a particular IPBlock. If this field is set then
     * neither of the other fields can be.
     *
     * @var IPBlock
     */
    public $ipBlock = null;

    /**
     * Selects Namespaces using cluster-scoped labels. This field follows standard
     * label selector semantics; if present but empty, it selects all namespaces.
     *
     * If PodSelector is also set, then the NetworkPolicyPeer as a whole selects the
     * Pods matching PodSelector in the Namespaces selected by NamespaceSelector.
     * Otherwise it selects all Pods in the Namespaces selected by NamespaceSelector.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $namespaceSelector = null;

    /**
     * This is a label selector which selects Pods. This field follows standard label
     * selector semantics; if present but empty, it selects all pods.
     *
     * If NamespaceSelector is also set, then the NetworkPolicyPeer as a whole selects
     * the Pods matching PodSelector in the Namespaces selected by NamespaceSelector.
     * Otherwise it selects the Pods matching PodSelector in the policy's own
     * Namespace.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $podSelector = null;


}

