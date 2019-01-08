<?php

namespace Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1;

/**
 * AuditSinkSpec holds the spec for the audit sink
 */
class AuditSinkSpec extends \Kubernetes\AbstractModel
{

    /**
     * Policy defines the policy for selecting which events should be sent to the
     * webhook required
     *
     * @var Policy
     */
    public $policy = null;

    /**
     * Webhook to send events required
     *
     * @var Webhook
     */
    public $webhook = null;


}

