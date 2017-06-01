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


class ResourceQuotaSpec extends AbstractModel
{
    /**
     * @var \StdClass
     * Hard is the set of desired hard limits for each named resource. More info:
     * http://releases.k8s.io/HEAD/docs/design/admission_control_resource_quota.md#admissioncontrol-plugin-resourcequota
     */
    public $hard;

    /**
     * @var string[]
     * A collection of filters that must match each object tracked by a quota. If not specified, the quota matches all
     * objects.
     */
    public $scopes;

}