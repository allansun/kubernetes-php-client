<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1alpha1;

/**
 * Subject matches the originator of a request, as identified by the request
 * authentication system. There are three ways of matching an originator; by user,
 * group, or service account.
 */
class Subject extends \KubernetesRuntime\AbstractModel
{

    /**
     * @var GroupSubject
     */
    public $group = null;

    /**
     * Required
     *
     * @var string
     */
    public $kind = null;

    /**
     * @var ServiceAccountSubject
     */
    public $serviceAccount = null;

    /**
     * @var UserSubject
     */
    public $user = null;


}

