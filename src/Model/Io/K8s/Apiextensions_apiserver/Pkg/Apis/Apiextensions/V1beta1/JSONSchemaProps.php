<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4
 * (http://json-schema.org/).
 */
class JSONSchemaProps extends \Kubernetes\AbstractModel
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


}

