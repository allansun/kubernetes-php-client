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


class CertificateSigningRequestStatus extends AbstractModel
{
    /**
     * @var string
     * If request was approved, the controller will place the issued certificate here.
     */
    public $certificate;

    /**
     * @var CertificateSigningRequestCondition[]
     * Conditions applied to the request, such as approval or denial.
     */
    public $conditions;

    /**
     * @param CertificateSigningRequestCondition[] $conditions
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        $this->conditions = $this->_createPropertyValue($conditions, CertificateSigningRequestCondition::class, true);

        return $this;
    }

}