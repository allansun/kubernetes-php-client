<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4
 * (http://json-schema.org/).
 */
class JSONSchemaProps extends \KubernetesRuntime\AbstractModel
{

    /**
     * @var string
     */
    public $_ref = null;

    /**
     * @var string
     */
    public $_schema = null;

    /**
     * @var JSONSchemaPropsOrBool
     */
    public $additionalItems = null;

    /**
     * @var JSONSchemaPropsOrBool
     */
    public $additionalProperties = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $allOf = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $anyOf = null;

    /**
     * default is a default value for undefined object fields. Defaulting is a beta
     * feature under the CustomResourceDefaulting feature gate.
     * CustomResourceDefinitions with defaults must be created using the v1 (or newer)
     * CustomResourceDefinition API.
     *
     * @var JSON
     */
    public $default = null;

    /**
     * @var object
     */
    public $definitions = null;

    /**
     * @var object
     */
    public $dependencies = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var JSON[]
     */
    public $enum = null;

    /**
     * @var JSON
     */
    public $example = null;

    /**
     * @var boolean
     */
    public $exclusiveMaximum = null;

    /**
     * @var boolean
     */
    public $exclusiveMinimum = null;

    /**
     * @var ExternalDocumentation
     */
    public $externalDocs = null;

    /**
     * @var string
     */
    public $format = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var JSONSchemaPropsOrArray
     */
    public $items = null;

    /**
     * @var integer
     */
    public $maxItems = null;

    /**
     * @var integer
     */
    public $maxLength = null;

    /**
     * @var integer
     */
    public $maxProperties = null;

    /**
     * @var float
     */
    public $maximum = null;

    /**
     * @var integer
     */
    public $minItems = null;

    /**
     * @var integer
     */
    public $minLength = null;

    /**
     * @var integer
     */
    public $minProperties = null;

    /**
     * @var float
     */
    public $minimum = null;

    /**
     * @var float
     */
    public $multipleOf = null;

    /**
     * @var JSONSchemaProps
     */
    public $not = null;

    /**
     * @var boolean
     */
    public $nullable = null;

    /**
     * @var JSONSchemaProps[]
     */
    public $oneOf = null;

    /**
     * @var string
     */
    public $pattern = null;

    /**
     * @var object
     */
    public $patternProperties = null;

    /**
     * @var object
     */
    public $properties = null;

    /**
     * @var string[]
     */
    public $required = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var boolean
     */
    public $uniqueItems = null;

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes
     * runtime.Object, with TypeMeta and ObjectMeta. The type must be object. It is
     * allowed to further restrict the embedded object. kind, apiVersion and metadata
     * are validated automatically. x-kubernetes-preserve-unknown-fields is allowed to
     * be true, but does not have to be if the object is fully specified (up to kind,
     * apiVersion, metadata).
     *
     * @var boolean
     */
    public $x-kubernetes-embedded-resource = null;

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a
     * string. If this is true, an empty type is allowed and type as child of anyOf is
     * permitted if following one of the following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     *
     * @var boolean
     */
    public $x-kubernetes-int-or-string = null;

    /**
     * x-kubernetes-list-map-keys annotates an array with the x-kubernetes-list-type
     * `map` by specifying the keys used as the index of the map.
     *
     * This tag MUST only be used on lists that have the "x-kubernetes-list-type"
     * extension set to "map". Also, the values specified for this attribute must be a
     * scalar typed field of the child structure (no nesting is supported).
     *
     * @var string[]
     */
    public $x-kubernetes-list-map-keys = null;

    /**
     * x-kubernetes-list-type annotates an array to further describe its topology. This
     * extension must only be used on lists and may have 3 possible values:
     *
     * 1) `atomic`: the list is treated as a single entity, like a scalar.
     *      Atomic lists will be entirely replaced when updated. This extension
     *      may be used on any type of list (struct, scalar, ...).
     * 2) `set`:
     *      Sets are lists that must not have multiple items with the same value. Each
     *      value must be a scalar, an object with x-kubernetes-map-type `atomic` or an
     *      array with x-kubernetes-list-type `atomic`.
     * 3) `map`:
     *      These lists are like maps in that their elements have a non-index key
     *      used to identify them. Order is preserved upon merge. The map tag
     *      must only be used on a list with elements of type object.
     * Defaults to atomic for arrays.
     *
     * @var string
     */
    public $x-kubernetes-list-type = null;

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from
     * pruning fields which are not specified in the validation schema. This affects
     * fields recursively, but switches back to normal pruning behaviour if nested
     * properties or additionalProperties are specified in the schema. This can either
     * be true or undefined. False is forbidden.
     *
     * @var boolean
     */
    public $x-kubernetes-preserve-unknown-fields = null;


}

