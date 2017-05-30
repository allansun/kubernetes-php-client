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


class NonResourceAttributes extends AbstractModel
{

    /**
     * @var string
     * Path is the URL path of the request
     */
    public $path;

    /**
     * @var string
     * Verb is the standard HTTP verb
     */
    public $verb;
}