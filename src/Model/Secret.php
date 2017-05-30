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

class Secret extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var \StdClass
     * Data contains the secret data. Each key must be a valid DNS_SUBDOMAIN or leading dot followed by valid
     * DNS_SUBDOMAIN. The serialized form of the secret data is a base64 encoded string, representing the arbitrary
     * (possibly non-string) data value here. Described in https://tools.ietf.org/html/rfc4648#section-4
     */
    public $data;
    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'Secret';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var \StdClass
     * stringData allows specifying non-binary secret data in string form. It is provided as a write-only convenience
     * method. All keys and values are merged into the data field on write, overwriting any existing values. It is
     * never output when reading from the API.
     */
    public $stringData;

    /**
     * @var string
     * Used to facilitate programmatic handling of secret data.
     */
    public $type;


    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ObjectMeta::class, false);

        return $this;
    }

}