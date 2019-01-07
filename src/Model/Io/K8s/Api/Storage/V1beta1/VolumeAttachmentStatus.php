<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1beta1;

/**
 * VolumeAttachmentStatus is the status of a VolumeAttachment request.
 */
class VolumeAttachmentStatus extends \Kubernetes\AbstractModel
{

    /**
     * The last error encountered during attach operation, if any. This field must only
     * be set by the entity completing the attach operation, i.e. the
     * external-attacher.
     *
     * @var VolumeError
     */
    public $attachError = null;

    /**
     * Indicates the volume is successfully attached. This field must only be set by
     * the entity completing the attach operation, i.e. the external-attacher.
     *
     * @var boolean
     */
    public $attached = null;

    /**
     * Upon successful attach, this field is populated with any information returned by
     * the attach operation that must be passed into subsequent WaitForAttach or Mount
     * calls. This field must only be set by the entity completing the attach
     * operation, i.e. the external-attacher.
     *
     * @var object
     */
    public $attachmentMetadata = null;

    /**
     * The last error encountered during detach operation, if any. This field must only
     * be set by the entity completing the detach operation, i.e. the
     * external-attacher.
     *
     * @var VolumeError
     */
    public $detachError = null;


}

