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


/**
 * Patch is provided to give a concrete name and type to the Kubernetes PATCH request body.
 *
 * @package Kubernetes\Model
 */
class Patch extends AbstractModel
{
    private $data;

    public function exchangeArray($data)
    {
        $this->data = $data;
    }

    public function toJson()
    {
        return json_encode($data);
    }

    public function getArrayCopy()
    {
        return $this->data;
    }

}