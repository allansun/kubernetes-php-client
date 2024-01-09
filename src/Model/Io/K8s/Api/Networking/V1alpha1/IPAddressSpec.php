<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * IPAddressSpec describe the attributes in an IP Address.
 */
class IPAddressSpec extends AbstractModel
{
    /**
     * ParentRef references the resource that an IPAddress is attached to. An IPAddress
     * must reference a parent object.
     *
     * @var ParentReference
     */
    public $parentRef = null;
}

