<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * ScaleSpec describes the attributes of a scale subresource
 */
class ScaleSpec extends AbstractModel
{

    /**
     * desired number of instances for the scaled object.
     *
     * @var integer
     */
    public $replicas = null;


}

