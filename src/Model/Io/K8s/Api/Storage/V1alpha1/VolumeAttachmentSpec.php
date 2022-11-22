<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeAttachmentSpec is the specification of a VolumeAttachment request.
 */
class VolumeAttachmentSpec extends AbstractModel
{

    /**
     * Attacher indicates the name of the volume driver that MUST handle this request.
     * This is the name returned by GetPluginName().
     *
     * @var string
     */
    public $attacher = null;

    /**
     * The node that the volume should be attached to.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * Source represents the volume that should be attached.
     *
     * @var VolumeAttachmentSource
     */
    public $source = null;


}

