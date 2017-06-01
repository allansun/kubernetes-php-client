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


class PodTemplateSpec extends AbstractModel
{
    /**
     * @var ObjectMeta
     */
    public $metadata;

    /**
     * @var PodSpec
     */
    public $spec;

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
     * @param PodSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, PodSpec::class, false);

        return $this;
    }

}