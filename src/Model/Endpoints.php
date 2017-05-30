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

class Endpoints extends AbstractModel
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
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'Endpoints';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var EndpointSubset[]
     * The set of all endpoints is the union of all subsets. Addresses are placed into subsets according to the IPs
     * they share. A single address with multiple ports, some of which are ready and some of which are not (because
     * they come from different containers) will result in the address being displayed in different subsets for the
     * different ports. No address will appear in both Addresses and NotReadyAddresses in the same subset. Sets of
     * addresses and ports that comprise a service.
     */
    public $subsets;

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

    /**
     * @param EndpointSubset[] $subsets
     *
     * @return self
     */
    public function setSubsets($subsets)
    {
        $this->subsets = $this->_createPropertyValue($subsets, EndpointSubset::class, true);

        return $this;
    }


}