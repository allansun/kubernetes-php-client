<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CustomResourceDefinitionNames indicates the names to serve this
 * CustomResourceDefinition
 */
class CustomResourceDefinitionNames extends AbstractModel
{

    /**
     * categories is a list of grouped resources this custom resource belongs to (e.g.
     * 'all'). This is published in API discovery documents, and used by clients to
     * support invocations like `kubectl get all`.
     *
     * @var string[]
     */
    public $categories = null;

    /**
     * kind is the serialized kind of the resource. It is normally CamelCase and
     * singular. Custom resource instances will use this value as the `kind` attribute
     * in API calls.
     *
     * @var string
     */
    public $kind = null;

    /**
     * listKind is the serialized kind of the list for this resource. Defaults to
     * "`kind`List".
     *
     * @var string
     */
    public $listKind = null;

    /**
     * plural is the plural name of the resource to serve. The custom resources are
     * served under `/apis/<group>/<version>/.../<plural>`. Must match the name of the
     * CustomResourceDefinition (in the form `<names.plural>.<group>`). Must be all
     * lowercase.
     *
     * @var string
     */
    public $plural = null;

    /**
     * shortNames are short names for the resource, exposed in API discovery documents,
     * and used by clients to support invocations like `kubectl get <shortname>`. It
     * must be all lowercase.
     *
     * @var string[]
     */
    public $shortNames = null;

    /**
     * singular is the singular name of the resource. It must be all lowercase.
     * Defaults to lowercased `kind`.
     *
     * @var string
     */
    public $singular = null;


}

