<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4
 * (http://json-schema.org/).
 */
class JSONSchemaProps extends AbstractModel
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
     * default is a default value for undefined object fields. Defaulting is an alpha
     * feature under the CustomResourceDefaulting feature gate. Defaulting requires
     * spec.preserveUnknownFields to be false.
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

