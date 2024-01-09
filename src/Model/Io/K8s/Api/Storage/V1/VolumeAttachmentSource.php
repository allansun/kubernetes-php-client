<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeAttachmentSource represents a volume that should be attached. Right now
 * only PersistenVolumes can be attached via external attacher, in future we may
 * allow also inline volumes in pods. Exactly one member can be set.
 */
class VolumeAttachmentSource extends AbstractModel
{
    /**
     * inlineVolumeSpec contains all the information necessary to attach a persistent
     * volume defined by a pod's inline VolumeSource. This field is populated only for
     * the CSIMigration feature. It contains translated fields from a pod's inline
     * VolumeSource to a PersistentVolumeSpec. This field is beta-level and is only
     * honored by servers that enabled the CSIMigration feature.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\PersistentVolumeSpec
     */
    public $inlineVolumeSpec = null;

    /**
     * Name of the persistent volume to attach.
     *
     * @var string
     */
    public $persistentVolumeName = null;
}

