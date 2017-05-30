<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes\Model;


class SubjectAccessReviewStatus extends AbstractModel
{
    /**
     * @var boolean
     * Allowed is required. True if the action would be allowed, false otherwise.
     */
    public $allowed;

    /**
     * @var string
     * EvaluationError is an indication that some error occurred during the authorization check. It is entirely
     * possible to get an error and be able to continue determine authorization status in spite of it. For instance,
     * RBAC can be missing a role, but enough roles are still present and bound to reason about the request.
     */
    public $evaluationError;

    /**
     * @var string
     * Reason is optional. It indicates why a request was allowed or denied.
     */
    public $reason;
}