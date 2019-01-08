<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

/**
 * ListMeta describes metadata that synthetic resources must have, including lists
 * and various status objects. A resource may have only one of {ObjectMeta,
 * ListMeta}.
 */
class ListMeta extends \Kubernetes\AbstractModel
{

    /**
     * continue may be set if the user set a limit on the number of items returned, and
     * indicates that the server has more data available. The value is opaque and may
     * be used to issue another request to the endpoint that served this list to
     * retrieve the next set of available objects. Continuing a consistent list may not
     * be possible if the server configuration has changed or more than a few minutes
     * have passed. The resourceVersion field returned when using this continue value
     * will be identical to the value in the first response, unless you have received
     * this token from an error message.
     *
     * @var string
     */
    public $continue = null;

    /**
     * String that identifies the server's internal version of this object that can be
     * used by clients to determine when objects have changed. Value must be treated as
     * opaque by clients and passed unmodified back to the server. Populated by the
     * system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * @var string
     */
    public $selfLink = null;


}

