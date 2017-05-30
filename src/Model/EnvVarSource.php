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
 * EnvVarSource represents a source for the value of an EnvVar.
 *
 * @package Kubernetes\Model
 */
class EnvVarSource extends AbstractModel
{
    /**
     * @var ConfigMapKeySelector
     * Selects a key of a ConfigMap.
     */
    public $configMapKeyRef;

    /**
     * @var ObjectFieldSelector
     * Selects a field of the pod: supports metadata.name, metadata.namespace, metadata.labels, metadata.annotations,
     * spec.nodeName, spec.serviceAccountName, status.podIP.
     */
    public $fieldRef;

    /**
     * @var ResourceFieldSelector
     * Selects a resource of the container: only resources limits and requests (limits.cpu, limits.memory,
     * requests.cpu and requests.memory) are currently supported.
     */
    public $resourceFieldRef;

    /**
     * @var SecretKeySelector
     * Selects a key of a secret in the pod's namespace
     */
    public $secretKeyRef;

    /**
     * @param ConfigMapKeySelector $configMapKeyRef
     *
     * @return self
     */
    public function setConfigMapKeyRef($configMapKeyRef)
    {
        $this->configMapKeyRef = $this->_createPropertyValue($configMapKeyRef, ConfigMapKeySelector::class, false);

        return $this;
    }

    /**
     * @param ObjectFieldSelector $fieldRef
     *
     * @return self
     */
    public function setFieldRef($fieldRef)
    {
        $this->fieldRef = $this->_createPropertyValue($fieldRef, ObjectFieldSelector::class, false);

        return $this;
    }

    /**
     * @param ResourceFieldSelector $resourceFieldRef
     *
     * @return self
     */
    public function setResourceFieldRef($resourceFieldRef)
    {
        $this->resourceFieldRef = $this->_createPropertyValue($resourceFieldRef, ResourceFieldSelector::class, false);

        return $this;
    }

    /**
     * @param SecretKeySelector $secretKeyRef
     *
     * @return self
     */
    public function setSecretKeyRef($secretKeyRef)
    {
        $this->secretKeyRef = $this->_createPropertyValue($secretKeyRef, SecretKeySelector::class, false);

        return $this;
    }

}