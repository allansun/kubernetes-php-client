<?php

namespace Kubernetes\Model\Io\K8s\Api\Node\V1alpha1;

/**
 * Scheduling specifies the scheduling constraints for nodes supporting a
 * RuntimeClass.
 */
class Scheduling extends \KubernetesRuntime\AbstractModel
{

    /**
     * nodeSelector lists labels that must be present on nodes that support this
     * RuntimeClass. Pods using this RuntimeClass can only be scheduled to a node
     * matched by this selector. The RuntimeClass nodeSelector is merged with a pod's
     * existing nodeSelector. Any conflicts will cause the pod to be rejected in
     * admission.
     *
     * @var object
     */
    public $nodeSelector = null;

    /**
     * tolerations are appended (excluding duplicates) to pods running with this
     * RuntimeClass during admission, effectively unioning the set of nodes tolerated
     * by the pod and the RuntimeClass.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\Toleration[]
     */
    public $tolerations = null;


}

