<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * APIResource specifies the name of a resource and whether it is namespaced.
 */
class APIResource extends \Kubernetes\AbstractModel
{

    /**
     * categories is a list of the grouped resources this resource belongs to (e.g.
     * 'all')
     *
     * @var string[]
     */
    public $categories = null;

    /**
     * group is the preferred group of the resource.  Empty implies the group of the
     * containing resource list. For subresources, this may have a different value, for
     * example: Scale".
     *
     * @var string
     */
    public $group = null;

    /**
     * kind is the kind for the resource (e.g. 'Foo' is the kind for a resource 'foo')
     *
     * @var string
     */
    public $kind = null;

    /**
     * name is the plural name of the resource.
     *
     * @var string
     */
    public $name = null;

    /**
     * namespaced indicates if a resource is namespaced or not.
     *
     * @var boolean
     */
    public $namespaced = null;

    /**
     * shortNames is a list of suggested short names of the resource.
     *
     * @var string[]
     */
    public $shortNames = null;

    /**
     * singularName is the singular name of the resource.  This allows clients to
     * handle plural and singular opaquely. The singularName is more correct for
     * reporting status on a single item and both singular and plural are allowed from
     * the kubectl CLI interface.
     *
     * @var string
     */
    public $singularName = null;

    /**
     * verbs is a list of supported kube verbs (this includes get, list, watch, create,
     * update, patch, delete, deletecollection, and proxy)
     *
     * @var string[]
     */
    public $verbs = null;

    /**
     * version is the preferred version of the resource.  Empty implies the version of
     * the containing resource list For subresources, this may have a different value,
     * for example: v1 (while inside a v1beta1 version of the core resource's group)".
     *
     * @var string
     */
    public $version = null;


}

