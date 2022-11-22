<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * A StatefulSetSpec is the specification of a StatefulSet.
 */
class StatefulSetSpec extends AbstractModel
{

    /**
     * podManagementPolicy controls how pods are created during initial scale up, when
     * replacing pods on nodes, or when scaling down. The default policy is
     * `OrderedReady`, where pods are created in increasing order (pod-0, then pod-1,
     * etc) and the controller will wait until each pod is ready before continuing.
     * When scaling down, the pods are removed in the opposite order. The alternative
     * policy is `Parallel` which will create pods in parallel to match the desired
     * scale without waiting, and on scale down will delete all pods at once.
     *
     * @var string
     */
    public $podManagementPolicy = null;

    /**
     * replicas is the desired number of replicas of the given Template. These are
     * replicas in the sense that they are instantiations of the same Template, but
     * individual replicas also have a consistent identity. If unspecified, defaults to
     * 1.
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * revisionHistoryLimit is the maximum number of revisions that will be maintained
     * in the StatefulSet's revision history. The revision history consists of all
     * revisions not represented by a currently applied StatefulSetSpec version. The
     * default value is 10.
     *
     * @var integer
     */
    public $revisionHistoryLimit = null;

    /**
     * selector is a label query over pods that should match the replica count. It must
     * match the pod template's labels. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#label-selectors
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * serviceName is the name of the service that governs this StatefulSet. This
     * service must exist before the StatefulSet, and is responsible for the network
     * identity of the set. Pods get DNS/hostnames that follow the pattern:
     * pod-specific-string.serviceName.default.svc.cluster.local where
     * "pod-specific-string" is managed by the StatefulSet controller.
     *
     * @var string
     */
    public $serviceName = null;

    /**
     * template is the object that describes the pod that will be created if
     * insufficient replicas are detected. Each pod stamped out by the StatefulSet will
     * fulfill this Template, but have a unique identity from the rest of the
     * StatefulSet.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateSpec
     */
    public $template = null;

    /**
     * updateStrategy indicates the StatefulSetUpdateStrategy that will be employed to
     * update Pods in the StatefulSet when a revision is made to Template.
     *
     * @var StatefulSetUpdateStrategy
     */
    public $updateStrategy = null;

    /**
     * volumeClaimTemplates is a list of claims that pods are allowed to reference. The
     * StatefulSet controller is responsible for mapping network identities to claims
     * in a way that maintains the identity of a pod. Every claim in this list must
     * have at least one matching (by name) volumeMount in one container in the
     * template. A claim in this list takes precedence over any volumes in the
     * template, with the same name.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolumeClaim[]
     */
    public $volumeClaimTemplates = null;


}

