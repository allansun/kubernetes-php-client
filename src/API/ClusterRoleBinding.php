<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRoleBindingList as ClusterRoleBindingList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRoleBinding as TheClusterRoleBinding;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRoleBindingList as ClusterRoleBindingListV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRoleBinding as TheClusterRoleBindingV1alpha1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRoleBindingList as ClusterRoleBindingListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRoleBinding as TheClusterRoleBindingV1beta1;

class ClusterRoleBinding extends \KubernetesRuntime\AbstractAPI
{

    /**
     * list or watch objects of kind ClusterRoleBinding
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleBindingList|mixed
     */
    public function listRbacAuthorizationV1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * create a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheClusterRoleBinding $Model
     * @param array $queries
     * @return TheClusterRoleBinding|mixed
     */
    public function createRbacAuthorizationV1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * delete collection of ClusterRoleBinding
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1Collection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1CollectionClusterRoleBinding'
        );
    }

    /**
     * read the specified ClusterRoleBinding
     *
     * @param $name
     * @return TheClusterRoleBinding|mixed
     */
    public function readRbacAuthorizationV1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * replace the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheClusterRoleBinding $Model
     * @param array $queries
     * @return TheClusterRoleBinding|mixed
     */
    public function replaceRbacAuthorizationV1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * delete a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
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
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * partially update the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheClusterRoleBinding|mixed
     */
    public function patchRbacAuthorizationV1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/clusterrolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1ClusterRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1ClusterRoleBinding'
        );
    }

    /**
     * list or watch objects of kind ClusterRoleBinding
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleBindingListV1alpha1|mixed
     */
    public function listRbacAuthorizationV1alpha1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * create a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheClusterRoleBindingV1alpha1 $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1alpha1|mixed
     */
    public function createRbacAuthorizationV1alpha1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * delete collection of ClusterRoleBinding
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1alpha1Collection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1CollectionClusterRoleBinding'
        );
    }

    /**
     * read the specified ClusterRoleBinding
     *
     * @param $name
     * @return TheClusterRoleBindingV1alpha1|mixed
     */
    public function readRbacAuthorizationV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * replace the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheClusterRoleBindingV1alpha1 $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1alpha1|mixed
     */
    public function replaceRbacAuthorizationV1alpha1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * delete a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
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
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * partially update the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1alpha1|mixed
     */
    public function patchRbacAuthorizationV1alpha1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/clusterrolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1ClusterRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1ClusterRoleBinding'
        );
    }

    /**
     * list or watch objects of kind ClusterRoleBinding
     *
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey allowWatchBookmarks	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return ClusterRoleBindingListV1beta1|mixed
     */
    public function listRbacAuthorizationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * create a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param TheClusterRoleBindingV1beta1 $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1beta1|mixed
     */
    public function createRbacAuthorizationV1beta1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'createRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * delete collection of ClusterRoleBinding
     *
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey continue	string
     * @configkey dryRun	string
     * @configkey fieldSelector	string
     * @configkey gracePeriodSeconds	integer
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1beta1Collection(\Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding'
        );
    }

    /**
     * read the specified ClusterRoleBinding
     *
     * @param $name
     * @return TheClusterRoleBindingV1beta1|mixed
     */
    public function readRbacAuthorizationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * replace the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @param $name
     * @param TheClusterRoleBindingV1beta1 $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1beta1|mixed
     */
    public function replaceRbacAuthorizationV1beta1($name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\ClusterRoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'replaceRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * delete a ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey dryRun	string
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
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * partially update the specified ClusterRoleBinding
     *
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @configkey dryRun	string
     * @configkey fieldManager	string
     * @configkey force	boolean
     * @param $name
     * @param Patch $Model
     * @param array $queries
     * @return TheClusterRoleBindingV1beta1|mixed
     */
    public function patchRbacAuthorizationV1beta1($name, \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1beta1/clusterrolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'patchRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/clusterrolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1ClusterRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind ClusterRoleBinding. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/clusterrolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1ClusterRoleBinding'
        );
    }


}

