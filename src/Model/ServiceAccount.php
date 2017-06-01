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


use Kubernetes\Model\Tag\Version;

class ServiceAccount extends AbstractModel
{
    /**
     * @var string
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     */
    public $apiVersion = Version::V1;

    /**
     * @var boolean
     * AutomountServiceAccountToken indicates whether pods running as this service account should have an API token
     * automatically mounted. Can be overridden at the pod level.
     */
    public $automountServiceAccountToken;

    /**
     * @var LocalObjectReference[]
     * ImagePullSecrets is a list of references to secrets in the same namespace to use for pulling any images in pods
     * that reference this ServiceAccount. ImagePullSecrets are distinct from Secrets because Secrets can be mounted in
     * the pod, but ImagePullSecrets are only accessed by the kubelet. More info:
     * http://kubernetes.io/docs/user-guide/secrets#manually-specifying-an-imagepullsecret
     */
    public $imagePullSecrets;


    /**
     * @var string
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase.
     * More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     */
    public $kind = 'ServiceAccount';

    /**
     * @var ObjectMeta
     * Standard object's metadata.
     * More info: https://github.com/kubernetes/community/blob/master/contributors/devel/api-conventions.md
     */
    public $metadata;

    /**
     * @var ObjectReference[]
     * Secrets is the list of secrets allowed to be used by pods running using this ServiceAccount. More info:
     * http://kubernetes.io/docs/user-guide/secrets
     */
    public $secrets;

    /**
     * @param ObjectMeta $metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $this->_createPropertyValue($metadata, ObjectMeta::class, false);

        return $this;
    }

    /**
     * @param LocalObjectReference[] $imagePullSecrets
     *
     * @return self
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->imagePullSecrets = $this->_createPropertyValue($imagePullSecrets, LocalObjectReference::class, true);

        return $this;
    }

    /**
     * @param ObjectReference[] $secrets
     *
     * @return self
     */
    public function setSecrets($secrets)
    {
        $this->secrets = $this->_createPropertyValue($secrets, ObjectReference::class, true);

        return $this;
    }


}