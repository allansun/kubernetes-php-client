<?php

namespace App\Kubernetes\Container;


use Kubernetes\Model\Io\K8s\Api\Core\V1\Container as Base;
use Kubernetes\Model\Io\K8s\Api\Core\V1\EnvVar;

abstract class AbstractContainer extends Base
{

    const DEFAULT_IMAGE_TAG = 'master';

    public function __construct($data = null, $project = null, $branch = null)
    {
        $this->stdin           = true;
        $this->tty             = true;
        $this->imagePullPolicy = 'Always';

        parent::__construct($data);
    }

    /**
     * Utility function to quickly add environment variables from configmap
     * $configs should be an associative array with ['envName'=>'configMapKeyRefName'] format
     *
     * @param string $configMapName
     * @param array  $configs
     */
    public function setConfigMapEnv(string $configMapName, array $configs)
    {
        foreach ($configs as $key => $value) {
            $this->env[] = [
                'name'      => $key,
                'valueFrom' => [
                    'configMapKeyRef' => [
                        'name' => $configMapName,
                        'key'  => $value
                    ]
                ]
            ];
        }
    }

    /**
     * Set environment variables in the format of [['key1'=>'value1'],['key2'=>'value2']] , shortcut for setting envs
     *
     * @param array $configs
     */
    public function setEnvDirectly(array $configs)
    {
        foreach ($configs as $key => $value) {
            $this->env[] = [
                'name'  => $key,
                'value' => $value
            ];
        }
    }

    /**
     * @param EnvVar|[] $env
     */
    public function addEnv($env)
    {
        $this->env[] = $env;
    }

}
