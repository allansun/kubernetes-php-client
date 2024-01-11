<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta3;

use \KubernetesRuntime\AbstractModel;

/**
 * PriorityLevelConfigurationSpec specifies the configuration of a priority level.
 */
class PriorityLevelConfigurationSpec extends AbstractModel
{
    /**
     * `exempt` specifies how requests are handled for an exempt priority level. This
     * field MUST be empty if `type` is `"Limited"`. This field MAY be non-empty if
     * `type` is `"Exempt"`. If empty and `type` is `"Exempt"` then the default values
     * for `ExemptPriorityLevelConfiguration` apply.
     *
     * @var ExemptPriorityLevelConfiguration
     */
    public $exempt = null;

    /**
     * `limited` specifies how requests are handled for a Limited priority level. This
     * field must be non-empty if and only if `type` is `"Limited"`.
     *
     * @var LimitedPriorityLevelConfiguration
     */
    public $limited = null;

    /**
     * `type` indicates whether this priority level is subject to limitation on request
     * execution.  A value of `"Exempt"` means that requests of this priority level are
     * not subject to a limit (and thus are never queued) and do not detract from the
     * capacity made available to other priority levels.  A value of `"Limited"` means
     * that (a) requests of this priority level _are_ subject to limits and (b) some of
     * the server's limited capacity is made available exclusively to this priority
     * level. Required.
     *
     * @var string
     */
    public $type = null;
}

