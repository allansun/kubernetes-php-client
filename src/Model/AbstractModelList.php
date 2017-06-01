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


abstract class AbstractModelList extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized
     * schemas to the latest internal value, and may reject unrecognized values. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion;

    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the
     * endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind;

    /**
     * @var ListMeta
     * Standard list metadata More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @param ListMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ListMeta::class, false);

        return $this;
    }

}