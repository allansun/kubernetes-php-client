<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1;

/**
 * VolumeAttachmentSource represents a volume that should be attached. Right now
 * only PersistenVolumes can be attached via external attacher, in future we may
 * allow also inline volumes in pods. Exactly one member can be set.
 */
class VolumeAttachmentSource extends \Kubernetes\AbstractModel
{

    /**
     * Name of the persistent volume to attach.
     *
     * @var string
     */
    public $persistentVolumeName = null;


}

