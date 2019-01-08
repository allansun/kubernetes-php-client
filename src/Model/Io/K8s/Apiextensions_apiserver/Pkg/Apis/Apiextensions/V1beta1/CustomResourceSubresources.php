<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceSubresources defines the status and scale subresources for
 * CustomResources.
 */
class CustomResourceSubresources extends \Kubernetes\AbstractModel
{

    /**
     * Scale denotes the scale subresource for CustomResources
     *
     * @var CustomResourceSubresourceScale
     */
    public $scale = null;

    /**
     * Status denotes the status subresource for CustomResources
     *
     * @var CustomResourceSubresourceStatus
     */
    public $status = null;


}

