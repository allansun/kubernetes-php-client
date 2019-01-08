<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceSubresourceScale defines how to serve the scale subresource for
 * CustomResources.
 */
class CustomResourceSubresourceScale extends \Kubernetes\AbstractModel
{

    /**
     * LabelSelectorPath defines the JSON path inside of a CustomResource that
     * corresponds to Scale.Status.Selector. Only JSON paths without the array notation
     * are allowed. Must be a JSON Path under .status. Must be set to work with HPA. If
     * there is no value under the given path in the CustomResource, the status label
     * selector value in the /scale subresource will default to the empty string.
     *
     * @var string
     */
    public $labelSelectorPath = null;

    /**
     * SpecReplicasPath defines the JSON path inside of a CustomResource that
     * corresponds to Scale.Spec.Replicas. Only JSON paths without the array notation
     * are allowed. Must be a JSON Path under .spec. If there is no value under the
     * given path in the CustomResource, the /scale subresource will return an error on
     * GET.
     *
     * @var string
     */
    public $specReplicasPath = null;

    /**
     * StatusReplicasPath defines the JSON path inside of a CustomResource that
     * corresponds to Scale.Status.Replicas. Only JSON paths without the array notation
     * are allowed. Must be a JSON Path under .status. If there is no value under the
     * given path in the CustomResource, the status replica value in the /scale
     * subresource will default to 0.
     *
     * @var string
     */
    public $statusReplicasPath = null;


}

