<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\Role as Role;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleList as RoleList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\Role as Role;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\RoleList as RoleList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\Role as Role;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\RoleList as RoleList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Role extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Role
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
     * @param string $namespace
     * @param array $queries
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * create a Role
     *
     * @param string $namespace
     * @param Role $Model
     * @return Role|mixed
     */
    public function createRbacAuthorizationV1(string $namespace = 'default', \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * delete collection of Role
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1CollectionNamespacedRole'
        );
    }

    /**
     * read the specified Role
     *
     * @param string $namespace
     * @param $name
     * @return Role|mixed
     */
    public function readRbacAuthorizationV1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * replace the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Role $Model
     * @return Role|mixed
     */
    public function replaceRbacAuthorizationV1(string $namespace = 'default', $name, \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * delete a Role
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * partially update the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Role|mixed
     */
    public function patchRbacAuthorizationV1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * list or watch objects of kind Role
     *
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/roles"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1RoleForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{$namespace}/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1NamespacedRoleList'
        );
    }

    /**
     * watch changes to an object of kind Role
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1RoleListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Role
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
     * @param string $namespace
     * @param array $queries
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1alpha1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * create a Role
     *
     * @param string $namespace
     * @param Role $Model
     * @return Role|mixed
     */
    public function createRbacAuthorizationV1alpha1(string $namespace = 'default', \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * delete collection of Role
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1alpha1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1CollectionNamespacedRole'
        );
    }

    /**
     * read the specified Role
     *
     * @param string $namespace
     * @param $name
     * @return Role|mixed
     */
    public function readRbacAuthorizationV1alpha1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * replace the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Role $Model
     * @return Role|mixed
     */
    public function replaceRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * delete a Role
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * partially update the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Role|mixed
     */
    public function patchRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * list or watch objects of kind Role
     *
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1alpha1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/roles"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1RoleForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/namespaces/{$namespace}/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1NamespacedRoleList'
        );
    }

    /**
     * watch changes to an object of kind Role
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1NamespacedRole'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1RoleListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Role
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
     * @param string $namespace
     * @param array $queries
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * create a Role
     *
     * @param string $namespace
     * @param Role $Model
     * @return Role|mixed
     */
    public function createRbacAuthorizationV1beta1(string $namespace = 'default', \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * delete collection of Role
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1beta1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1CollectionNamespacedRole'
        );
    }

    /**
     * read the specified Role
     *
     * @param string $namespace
     * @param $name
     * @return Role|mixed
     */
    public function readRbacAuthorizationV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * replace the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Role $Model
     * @return Role|mixed
     */
    public function replaceRbacAuthorizationV1beta1(string $namespace = 'default', $name, \Role $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * delete a Role
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * partially update the specified Role
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Role|mixed
     */
    public function patchRbacAuthorizationV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/roles/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * list or watch objects of kind Role
     *
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1beta1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/roles"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1beta1RoleForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{$namespace}/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1NamespacedRoleList'
        );
    }

    /**
     * watch changes to an object of kind Role
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{$namespace}/roles/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1NamespacedRole'
        );
    }

    /**
     * watch individual changes to a list of Role
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/roles"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1RoleListForAllNamespaces'
        );
    }


}

