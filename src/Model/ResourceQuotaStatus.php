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


class ResourceQuotaStatus extends AbstractModel
{
    /**
     * @var \StdClass
     * Hard is the set of enforced hard limits for each named resource. More info:
     * http://releases.k8s.io/HEAD/docs/design/admission_control_resource_quota.md#admissioncontrol-plugin-resourcequota
     */
    public $hard;

    /**
     * @var \StdClass
     * Used is the current observed total usage of the resource in the namespace.
     */
    public $used;

}