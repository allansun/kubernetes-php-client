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


use Kubernetes\Model\Tag\Version;

class ObjectReference extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var string
     * If referring to a piece of an object instead of an entire object, this string should contain a valid JSON/Go
     * field access statement, such as desiredState.manifest.containers[2]. For example, if the object reference is to
     * a container within a pod, this would take on a value like: "spec.containers{name}" (where "name" refers to the
     * name of the container that triggered the event) or if no container name is specified "spec.containers[2]"
     * (container with index 2 in this pod). This syntax is chosen only to have some well-defined way of referencing a
     * part of an object.
     */
    public $fieldPath;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'ObjectReference';

    /**
     * @var string
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public $name;

    /**
     * @var string
     * Namespace of the referent. More info: http://kubernetes.io/docs/user-guide/namespaces
     */
    public $namespace;

    /**
     * @var string
     * Specific resourceVersion to which this reference is made, if any. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public $resourceVersion;

    /**
     * @var string
     * UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public $uid;
}