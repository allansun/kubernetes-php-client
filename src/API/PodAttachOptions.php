<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodAttachOptions extends AbstractAPI
{
    /**
     * connect GET requests to attach of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodAttachOptions
     * @param array $queries options:
     * 'container'	string
     * The container in which to execute the command. Defaults to only container if
     * there is only one container in the pod.
     * 'stderr'	boolean
     * Stderr if true indicates that stderr is to be redirected for the attach call.
     * Defaults to true.
     * 'stdin'	boolean
     * Stdin if true, redirects the standard input stream of the pod for this call.
     * Defaults to false.
     * 'stdout'	boolean
     * Stdout if true indicates that stdout is to be redirected for the attach call.
     * Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the attach call. This is
     * passed through the container runtime so the tty is allocated on the worker node
     * by the container runtime. Defaults to false.
     *
     * @return string|mixed
     */
    public function connectGetPodAttach(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodAttach'
        );
    }

    /**
     * connect POST requests to attach of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodAttachOptions
     * @param array $queries options:
     * 'container'	string
     * The container in which to execute the command. Defaults to only container if
     * there is only one container in the pod.
     * 'stderr'	boolean
     * Stderr if true indicates that stderr is to be redirected for the attach call.
     * Defaults to true.
     * 'stdin'	boolean
     * Stdin if true, redirects the standard input stream of the pod for this call.
     * Defaults to false.
     * 'stdout'	boolean
     * Stdout if true indicates that stdout is to be redirected for the attach call.
     * Defaults to true.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the attach call. This is
     * passed through the container runtime so the tty is allocated on the worker node
     * by the container runtime. Defaults to false.
     *
     * @return string|mixed
     */
    public function connectPostPodAttach(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/attach",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodAttach'
        );
    }
}

