<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceColumnDefinition specifies a column for server side printing.
 */
class CustomResourceColumnDefinition extends \Kubernetes\AbstractModel
{

    /**
     * JSONPath is a simple JSON path, i.e. with array notation.
     *
     * @var string
     */
    public $JSONPath = null;

    /**
     * description is a human readable description of this column.
     *
     * @var string
     */
    public $description = null;

    /**
     * format is an optional OpenAPI type definition for this column. The 'name' format
     * is applied to the primary identifier column to assist in clients identifying
     * column is the resource name. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types
     * for more.
     *
     * @var string
     */
    public $format = null;

    /**
     * name is a human readable name for the column.
     *
     * @var string
     */
    public $name = null;

    /**
     * priority is an integer defining the relative importance of this column compared
     * to others. Lower numbers are considered higher priority. Columns that may be
     * omitted in limited space scenarios should be given a higher priority.
     *
     * @var integer
     */
    public $priority = null;

    /**
     * type is an OpenAPI type definition for this column. See
     * https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#data-types
     * for more.
     *
     * @var string
     */
    public $type = null;


}

