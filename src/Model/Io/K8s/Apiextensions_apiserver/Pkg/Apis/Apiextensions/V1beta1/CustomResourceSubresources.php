<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceSubresources defines the status and scale subresources for
 * CustomResources.
 */
class CustomResourceSubresources extends \KubernetesRuntime\AbstractModel
{

    /**
     * scale indicates the custom resource should serve a `/scale` subresource that
     * returns an `autoscaling/v1` Scale object.
     *
     * @var CustomResourceSubresourceScale
     */
    public $scale = null;

    /**
     * status indicates the custom resource should serve a `/status` subresource. When
     * enabled: 1. requests to the custom resource primary endpoint ignore changes to
     * the `status` stanza of the object. 2. requests to the custom resource `/status`
     * subresource ignore changes to anything other than the `status` stanza of the
     * object.
     *
     * @var CustomResourceSubresourceStatus
     */
    public $status = null;


}

