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

/**
 * Class APIResource
 *
 * @package Kubernetes\Model
 *
 * APIResource specifies the name of a resource and whether it is namespaced.
 */
class APIResource extends AbstractModel
{

    /**
     * @var string
     *
     * kind is the kind for the resource (e.g. 'Foo' is the kind for a resource 'foo')
     */
    public $kind;

    /**
     * @var string
     *
     * name is the name of the resource.
     */
    public $name;

    /**
     * @var boolean
     *
     * namespaced indicates if a resource is namespaced or not.
     */
    public $namespaced;

    /**
     * @var string[]
     *
     * shortNames is a list of suggested short names of the resource.
     */
    public $shortNames;

    /**
     * @var string[]
     *
     * verbs is a list of supported kube verbs
     * (this includes get, list, watch, create, update, patch, delete, deletecollection, and proxy)
     */
    public $verbs;

}