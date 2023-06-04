<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * A topology selector term represents the result of label queries. A null or empty
 * topology selector term matches no objects. The requirements of them are ANDed.
 * It provides a subset of functionality as NodeSelectorTerm. This is an alpha
 * feature and may change in the future.
 */
class TopologySelectorTerm extends AbstractModel
{

    /**
     * A list of topology selector requirements by labels.
     *
     * @var TopologySelectorLabelRequirement[]
     */
    public $matchLabelExpressions = null;


}

