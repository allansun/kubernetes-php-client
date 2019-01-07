<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

/**
 * NonResourceRule holds information that describes a rule for the non-resource
 */
class NonResourceRule extends \Kubernetes\AbstractModel
{

    /**
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s
     * are allowed, but only as the full, final step in the path.  "*" means all.
     *
     * @var string[]
     */
    public $nonResourceURLs = null;

    /**
     * Verb is a list of kubernetes non-resource API verbs, like: get, post, put,
     * delete, patch, head, options.  "*" means all.
     *
     * @var string[]
     */
    public $verbs = null;


}

