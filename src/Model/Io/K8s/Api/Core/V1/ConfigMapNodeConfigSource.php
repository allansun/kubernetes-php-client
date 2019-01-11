<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

/**
 * ConfigMapNodeConfigSource contains the information to reference a ConfigMap as a
 * config source for the Node.
 */
class ConfigMapNodeConfigSource extends \Kubernetes\AbstractModel
{

    /**
     * KubeletConfigKey declares which key of the referenced ConfigMap corresponds to
     * the KubeletConfiguration structure This field is required in all cases.
     *
     * @var string
     */
    public $kubeletConfigKey = null;

    /**
     * Name is the metadata.name of the referenced ConfigMap. This field is required in
     * all cases.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the metadata.namespace of the referenced ConfigMap. This field is
     * required in all cases.
     *
     * @var string
     */
    public $namespace = null;

    /**
     * ResourceVersion is the metadata.ResourceVersion of the referenced ConfigMap.
     * This field is forbidden in Node.Spec, and required in Node.Status.
     *
     * @var string
     */
    public $resourceVersion = null;

    /**
     * UID is the metadata.UID of the referenced ConfigMap. This field is forbidden in
     * Node.Spec, and required in Node.Status.
     *
     * @var string
     */
    public $uid = null;


}

