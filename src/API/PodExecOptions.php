<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodExecOptions extends AbstractAPI
{
    /**
     * connect GET requests to exec of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodExecOptions
     * @param array $queries options:
     * 'command'	string
     * Command is the remote command to execute. argv array. Not executed within a
     * shell.
     * 'container'	string
     * Container in which to execute the command. Defaults to only container if there
     * is only one container in the pod.
     * 'stderr'	boolean
     * Redirect the standard error stream of the pod for this call.
     * 'stdin'	boolean
     * Redirect the standard input stream of the pod for this call. Defaults to false.
     * 'stdout'	boolean
     * Redirect the standard output stream of the pod for this call.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the exec call. Defaults
     * to false.
     *
     * @return string|mixed
     */
    public function connectGetPodExec(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1GetNamespacedPodExec'
        );
    }

    /**
     * connect POST requests to exec of Pod
     *
     * @param string $namespace object name and auth scope, such as for teams and
     * projects
     * @param string $name name of the PodExecOptions
     * @param array $queries options:
     * 'command'	string
     * Command is the remote command to execute. argv array. Not executed within a
     * shell.
     * 'container'	string
     * Container in which to execute the command. Defaults to only container if there
     * is only one container in the pod.
     * 'stderr'	boolean
     * Redirect the standard error stream of the pod for this call.
     * 'stdin'	boolean
     * Redirect the standard input stream of the pod for this call. Defaults to false.
     * 'stdout'	boolean
     * Redirect the standard output stream of the pod for this call.
     * 'tty'	boolean
     * TTY if true indicates that a tty will be allocated for the exec call. Defaults
     * to false.
     *
     * @return string|mixed
     */
    public function connectPostPodExec(string $namespace, string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/pods/{$name}/exec",
        		[
        			'query' => $queries,
        		]
        	),
        	'connectCoreV1PostNamespacedPodExec'
        );
    }
}

