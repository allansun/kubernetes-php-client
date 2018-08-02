<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRoleList as ClusterRoleList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRole as TheClusterRole;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRoleList as ClusterRoleListV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRole as TheClusterRoleV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRoleList as ClusterRoleListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRole as TheClusterRoleV1beta1;

class ClusterRole extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleList|mixed
     */
    public function listRbacAuthorizationV1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * create a ClusterRole
     *
     * @param TheClusterRole $Model
     * @return TheClusterRole|mixed
     */
    public function createRbacAuthorizationV1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * delete collection of ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1CollectionClusterRole'
        );
    }

    /**
     * read the specified ClusterRole
     *
     * @param $name
     * @return TheClusterRole|mixed
     */
    public function readRbacAuthorizationV1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * replace the specified ClusterRole
     *
     * @param $name
     * @param TheClusterRole $Model
     * @return TheClusterRole|mixed
     */
    public function replaceRbacAuthorizationV1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * delete a ClusterRole
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * partially update the specified ClusterRole
     *
     * @param $name
     * @param Patch $Model
     * @return TheClusterRole|mixed
     */
    public function patchRbacAuthorizationV1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * watch individual changes to a list of ClusterRole
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/clusterroles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1ClusterRoleList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRole
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1ClusterRole'
        );
    }

    /**
     * list or watch objects of kind ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleListV1alpha1|mixed
     */
    public function listRbacAuthorizationV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * create a ClusterRole
     *
     * @param TheClusterRoleV1alpha1 $Model
     * @return TheClusterRoleV1alpha1|mixed
     */
    public function createRbacAuthorizationV1alpha1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * delete collection of ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1alpha1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1CollectionClusterRole'
        );
    }

    /**
     * read the specified ClusterRole
     *
     * @param $name
     * @return TheClusterRoleV1alpha1|mixed
     */
    public function readRbacAuthorizationV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * replace the specified ClusterRole
     *
     * @param $name
     * @param TheClusterRoleV1alpha1 $Model
     * @return TheClusterRoleV1alpha1|mixed
     */
    public function replaceRbacAuthorizationV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * delete a ClusterRole
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * partially update the specified ClusterRole
     *
     * @param $name
     * @param Patch $Model
     * @return TheClusterRoleV1alpha1|mixed
     */
    public function patchRbacAuthorizationV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * watch individual changes to a list of ClusterRole
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/clusterroles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1ClusterRoleList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRole
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1ClusterRole'
        );
    }

    /**
     * list or watch objects of kind ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleListV1beta1|mixed
     */
    public function listRbacAuthorizationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * create a ClusterRole
     *
     * @param TheClusterRoleV1beta1 $Model
     * @return TheClusterRoleV1beta1|mixed
     */
    public function createRbacAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * delete collection of ClusterRole
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1beta1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1CollectionClusterRole'
        );
    }

    /**
     * read the specified ClusterRole
     *
     * @param $name
     * @return TheClusterRoleV1beta1|mixed
     */
    public function readRbacAuthorizationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * replace the specified ClusterRole
     *
     * @param $name
     * @param TheClusterRoleV1beta1 $Model
     * @return TheClusterRoleV1beta1|mixed
     */
    public function replaceRbacAuthorizationV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRole $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * delete a ClusterRole
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * partially update the specified ClusterRole
     *
     * @param $name
     * @param Patch $Model
     * @return TheClusterRoleV1beta1|mixed
     */
    public function patchRbacAuthorizationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterroles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1beta1ClusterRole'
        );
    }

    /**
     * watch individual changes to a list of ClusterRole
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/clusterroles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1ClusterRoleList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRole
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/clusterroles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1ClusterRole'
        );
    }


}

