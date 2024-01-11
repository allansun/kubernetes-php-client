<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ParamKind is a tuple of Group Kind and Version.
 */
class ParamKind extends AbstractModel
{
    /**
     * APIVersion is the API group version the resources belong to. In format of
     * "group/version". Required.
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * Kind is the API kind the resources belong to. Required.
     *
     * @var string
     */
    public $kind = null;
}

