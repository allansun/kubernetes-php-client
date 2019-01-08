<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

/**
 * CustomResourceDefinitionNames indicates the names to serve this
 * CustomResourceDefinition
 */
class CustomResourceDefinitionNames extends \Kubernetes\AbstractModel
{

    /**
     * Categories is a list of grouped resources custom resources belong to (e.g.
     * 'all')
     *
     * @var string[]
     */
    public $categories = null;

    /**
     * Kind is the serialized kind of the resource.  It is normally CamelCase and
     * singular.
     *
     * @var string
     */
    public $kind = null;

    /**
     * ListKind is the serialized kind of the list for this resource.  Defaults to
     * <kind>List.
     *
     * @var string
     */
    public $listKind = null;

    /**
     * Plural is the plural name of the resource to serve.  It must match the name of
     * the CustomResourceDefinition-registration too: plural.group and it must be all
     * lowercase.
     *
     * @var string
     */
    public $plural = null;

    /**
     * ShortNames are short names for the resource.  It must be all lowercase.
     *
     * @var string[]
     */
    public $shortNames = null;

    /**
     * Singular is the singular name of the resource.  It must be all lowercase 
     * Defaults to lowercased <kind>
     *
     * @var string
     */
    public $singular = null;


}

