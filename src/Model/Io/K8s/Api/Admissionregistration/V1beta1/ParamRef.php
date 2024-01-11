<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ParamRef describes how to locate the params to be used as input to expressions
 * of rules applied by a policy binding.
 */
class ParamRef extends AbstractModel
{
    /**
     * name is the name of the resource being referenced.
     *
     * One of `name` or `selector` must be set, but `name` and `selector` are mutually
     * exclusive properties. If one is set, the other must be unset.
     *
     * A single parameter used for all admission requests can be configured by setting
     * the `name` field, leaving `selector` blank, and setting namespace if `paramKind`
     * is namespace-scoped.
     *
     * @var string
     */
    public $name = null;

    /**
     * namespace is the namespace of the referenced resource. Allows limiting the
     * search for params to a specific namespace. Applies to both `name` and `selector`
     * fields.
     *
     * A per-namespace parameter may be used by specifying a namespace-scoped
     * `paramKind` in the policy and leaving this field empty.
     *
     * - If `paramKind` is cluster-scoped, this field MUST be unset. Setting this field
     * results in a configuration error.
     *
     * - If `paramKind` is namespace-scoped, the namespace of the object being
     * evaluated for admission will be used when this field is left unset. Take care
     * that if this is left empty the binding must not match any cluster-scoped
     * resources, which will result in an error.
     *
     * @var string
     */
    public $namespace = null;

    /**
     * `parameterNotFoundAction` controls the behavior of the binding when the resource
     * exists, and name or selector is valid, but there are no parameters matched by
     * the binding. If the value is set to `Allow`, then no matched parameters will be
     * treated as successful validation by the binding. If set to `Deny`, then no
     * matched parameters will be subject to the `failurePolicy` of the policy.
     *
     * Allowed values are `Allow` or `Deny`
     *
     * Required
     *
     * @var string
     */
    public $parameterNotFoundAction = null;

    /**
     * selector can be used to match multiple param objects based on their labels.
     * Supply selector: {} to match all resources of the ParamKind.
     *
     * If multiple params are found, they are all evaluated with the policy expressions
     * and the results are ANDed together.
     *
     * One of `name` or `selector` must be set, but `name` and `selector` are mutually
     * exclusive properties. If one is set, the other must be unset.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;
}

