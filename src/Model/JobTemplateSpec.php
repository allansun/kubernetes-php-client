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


class JobTemplateSpec extends AbstractModel
{
    /**
     * @var ObjectMeta
     * Standard object's metadata of the jobs created from this template. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     */
    public $metadata;

    /**
     * @var JobSpec
     * Specification of the desired behavior of the job. More info:
     * http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
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
     * @param JobSpec $spec
     *
     * @return self
     */
    public function setSpec($spec)
    {
        $this->spec = $this->_createPropertyValue($spec, JobSpec::class, false);

        return $this;
    }

}