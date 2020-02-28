<?php

namespace App\Kubernetes\Ingress;

use Kubernetes\App\GitBranch;
use Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\HTTPIngressPath;
use Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\Ingress;
use Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\IngressTLS;

abstract class AbstractIngress extends Ingress
{
    public function __construct($host, $isUseHttps = false)
    {
        $hosts = explode(',', $host);
        $rules = [];

        foreach ($hosts as &$host) {
            $host    = strtolower($host);
            $rules[] = [
                'host' => $host,
            ];
        }

        parent::__construct(['spec' => ['rules' => $rules]]);

        if ($isUseHttps) {
            $this->enableHttps($hosts);
        }
    }

    protected function enableHttps($hosts)
    {
        $hosts = is_string($hosts) ? explode(',', $hosts) : $hosts;

        foreach ($hosts as $host) {
            $this->spec->tls[] =
                new IngressTLS(['hosts' => [$host], 'secretName' => $this->hostnameToSecretName($host) . '-tls']);
        }


        $this->metadata->annotations['cert-manager.io/cluster-issuer']           = 'certmanager-cluster-issuer';
        $this->metadata->annotations['nginx.ingress.kubernetes.io/ssl-redirect'] = 'false';


        return $this;
    }

    private function hostnameToSecretName($hostname)
    {
        return str_replace('.', '-', $hostname);

    }

    public function addService($serviceName, $path = null, $servicePort = 80)
    {
        foreach ($this->spec->rules as &$ingressRule) {
            $ingressRule->http->paths[] = new HTTPIngressPath([
                'path'    => $path,
                'backend' => [
                    'serviceName' => $serviceName,
                    'servicePort' => $servicePort
                ]
            ]);
        }

        return $this;
    }

    protected function getApplicationBaseUrl($baseUrl, $branch)
    {
        $baseUrls = explode(',', $baseUrl);
        foreach ($baseUrls as &$baseUrl) {
            if (GitBranch::MASTER === $branch) {
                /** @noinspection PhpUnusedLocalVariableInspection */
                $baseUrl = 'www.' . trim($baseUrl);
            } elseif (GitBranch::TEST === $branch) {
                /** @noinspection PhpUnusedLocalVariableInspection */
                $baseUrl = 'test.' . trim($baseUrl);
            } else {
                /** @noinspection PhpUnusedLocalVariableInspection */
                $baseUrl = 'www.' . $branch . '.test.' . trim($baseUrl);
            }
        }

        return implode(',', $baseUrls);
    }

}