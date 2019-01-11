<?php

namespace Kubernetes\Model\Io\K8s\Api\Auditregistration\V1alpha1;

/**
 * Policy defines the configuration of how audit events are logged
 */
class Policy extends \Kubernetes\AbstractModel
{

    /**
     * The Level that all requests are recorded at. available options: None, Metadata,
     * Request, RequestResponse required
     *
     * @var string
     */
    public $level = null;

    /**
     * Stages is a list of stages for which events are created.
     *
     * @var string[]
     */
    public $stages = null;


}

