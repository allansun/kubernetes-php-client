<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

/**
 * Webhook describes an admission webhook and the resources and operations it
 * applies to.
 */
class Webhook extends \Kubernetes\AbstractModel
{

    /**
     * ClientConfig defines how to communicate with the hook. Required
     *
     * @var WebhookClientConfig
     */
    public $clientConfig = null;

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are
     * handled - allowed values are Ignore or Fail. Defaults to Ignore.
     *
     * @var string
     */
    public $failurePolicy = null;

    /**
     * The name of the admission webhook. Name should be fully qualified, e.g.,
     * imagepolicy.kubernetes.io, where "imagepolicy" is the name of the webhook, and
     * kubernetes.io is the name of the organization. Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * NamespaceSelector decides whether to run the webhook on an object based on
     * whether the namespace for that object matches the selector. If the object itself
     * is a namespace, the matching is performed on object.metadata.labels. If the
     * object is another cluster scoped resource, it never skips the webhook.
     *
     * For example, to run the webhook on any objects whose namespace is not associated
     * with "runlevel" of "0" or "1";  you will set the selector as follows:
     * "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "runlevel",
     *       "operator": "NotIn",
     *       "values": [
     *         "0",
     *         "1"
     *       ]
     *     }
     *   ]
     * }
     *
     * If instead you want to only run the webhook on any objects whose namespace is
     * associated with the "environment" of "prod" or "staging"; you will set the
     * selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "environment",
     *       "operator": "In",
     *       "values": [
     *         "prod",
     *         "staging"
     *       ]
     *     }
     *   ]
     * }
     *
     * See https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/
     * for more examples of label selectors.
     *
     * Default to the empty LabelSelector, which matches everything.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $namespaceSelector = null;

    /**
     * Rules describes what operations on what resources/subresources the webhook cares
     * about. The webhook cares about an operation if it matches _any_ Rule. However,
     * in order to prevent ValidatingAdmissionWebhooks and MutatingAdmissionWebhooks
     * from putting the cluster in a state which cannot be recovered from without
     * completely disabling the plugin, ValidatingAdmissionWebhooks and
     * MutatingAdmissionWebhooks are never called on admission requests for
     * ValidatingWebhookConfiguration and MutatingWebhookConfiguration objects.
     *
     * @var RuleWithOperations[]
     */
    public $rules = null;

    /**
     * SideEffects states whether this webhookk has side effects. Acceptable values
     * are: Unknown, None, Some, NoneOnDryRun Webhooks with side effects MUST implement
     * a reconciliation system, since a request may be rejected by a future step in the
     * admission change and the side effects therefore need to be undone. Requests with
     * the dryRun attribute will be auto-rejected if they match a webhook with
     * sideEffects == Unknown or Some. Defaults to Unknown.
     *
     * @var string
     */
    public $sideEffects = null;


}

