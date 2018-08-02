<?php

namespace Kubernetes;

class ResponseTypes
{

    const TYPES = [
        'getCoreAPIVersions' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIVersions',
        ],
        'getCoreV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCoreV1ComponentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ComponentStatusList',
        ],
        'readCoreV1ComponentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ComponentStatus',
        ],
        'listCoreV1ConfigMapForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMapList',
        ],
        'listCoreV1EndpointsForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EndpointsList',
        ],
        'listCoreV1EventForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EventList',
        ],
        'listCoreV1LimitRangeForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRangeList',
        ],
        'listCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\NamespaceList',
        ],
        'createCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'createCoreV1NamespacedBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
        ],
        'listCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMapList',
        ],
        'createCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'deleteCoreV1CollectionNamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'replaceCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'deleteCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'listCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EndpointsList',
        ],
        'createCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'deleteCoreV1CollectionNamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'replaceCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'deleteCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'listCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EventList',
        ],
        'createCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'deleteCoreV1CollectionNamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'replaceCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'deleteCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'listCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRangeList',
        ],
        'createCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'deleteCoreV1CollectionNamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'replaceCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'deleteCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'listCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaimList',
        ],
        'createCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'deleteCoreV1CollectionNamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'replaceCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'deleteCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'readCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'replaceCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'patchCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'listCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodList',
        ],
        'createCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'deleteCoreV1CollectionNamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'deleteCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'createCoreV1NamespacedPodBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
        ],
        'createCoreV1NamespacedPodEviction' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\Eviction',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\Eviction',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\Eviction',
        ],
        'readCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'patchCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'listCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplateList',
        ],
        'createCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'deleteCoreV1CollectionNamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'replaceCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'deleteCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'listCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationControllerList',
        ],
        'createCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'deleteCoreV1CollectionNamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'replaceCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'deleteCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'readCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'replaceCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'patchCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'listCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuotaList',
        ],
        'createCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'deleteCoreV1CollectionNamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'replaceCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'deleteCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'readCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'replaceCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'patchCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'listCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\SecretList',
        ],
        'createCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'deleteCoreV1CollectionNamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'replaceCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'deleteCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'listCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccountList',
        ],
        'createCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'deleteCoreV1CollectionNamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'replaceCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'deleteCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'listCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceList',
        ],
        'createCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'readCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'replaceCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'deleteCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'readCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'replaceCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'patchCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'readCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'deleteCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1NamespaceFinalize' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'readCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'patchCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'listCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\NodeList',
        ],
        'createCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'deleteCoreV1CollectionNode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'replaceCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'deleteCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'readCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'replaceCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'patchCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'listCoreV1PersistentVolumeClaimForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaimList',
        ],
        'listCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeList',
        ],
        'createCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'deleteCoreV1CollectionPersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'replaceCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'deleteCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'readCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'replaceCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'patchCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'listCoreV1PodForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodList',
        ],
        'listCoreV1PodTemplateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplateList',
        ],
        'listCoreV1ReplicationControllerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationControllerList',
        ],
        'listCoreV1ResourceQuotaForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuotaList',
        ],
        'listCoreV1SecretForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\SecretList',
        ],
        'listCoreV1ServiceAccountForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccountList',
        ],
        'listCoreV1ServiceForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceList',
        ],
        'watchCoreV1ConfigMapListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1EndpointsListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1EventListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1LimitRangeListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespaceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedConfigMapList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEndpointsList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEventList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedLimitRangeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPersistentVolumeClaimList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodTemplateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedReplicationControllerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedResourceQuotaList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedSecretList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceAccountList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NodeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolumeClaimListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolumeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PodListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PodTemplateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ReplicationControllerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ResourceQuotaListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1SecretListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ServiceAccountListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ServiceListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAPIVersions' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroupList',
        ],
        'getAdmissionregistrationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAdmissionregistrationV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfigurationList',
        ],
        'createAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
        ],
        'deleteAdmissionregistrationV1alpha1CollectionInitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
        ],
        'replaceAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
        ],
        'deleteAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\InitializerConfiguration',
        ],
        'watchAdmissionregistrationV1alpha1InitializerConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1alpha1InitializerConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAdmissionregistrationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfigurationList',
        ],
        'createAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1beta1CollectionMutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
        ],
        'replaceAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\MutatingWebhookConfiguration',
        ],
        'listAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfigurationList',
        ],
        'createAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1beta1CollectionValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
        ],
        'replaceAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingWebhookConfiguration',
        ],
        'watchAdmissionregistrationV1beta1MutatingWebhookConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1ValidatingWebhookConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getApiextensionsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getApiextensionsV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinitionList',
        ],
        'createApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
        ],
        'deleteApiextensionsV1beta1CollectionCustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
        ],
        'replaceApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
        ],
        'deleteApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
        ],
        'replaceApiextensionsV1beta1CustomResourceDefinitionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1beta1\\CustomResourceDefinition',
        ],
        'watchApiextensionsV1beta1CustomResourceDefinitionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchApiextensionsV1beta1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getApiregistrationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getApiregistrationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIServiceList',
        ],
        'createApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
        ],
        'deleteApiregistrationV1beta1CollectionAPIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
        ],
        'replaceApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
        ],
        'deleteApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
        ],
        'replaceApiregistrationV1beta1APIServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1beta1\\APIService',
        ],
        'watchApiregistrationV1beta1APIServiceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchApiregistrationV1beta1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAppsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAppsV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAppsV1ControllerRevisionForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevisionList',
        ],
        'listAppsV1DaemonSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSetList',
        ],
        'listAppsV1DeploymentForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DeploymentList',
        ],
        'listAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevisionList',
        ],
        'createAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'deleteAppsV1CollectionNamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'replaceAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'deleteAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'listAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSetList',
        ],
        'createAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'deleteAppsV1CollectionNamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'replaceAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'deleteAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'readAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'replaceAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'patchAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'listAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DeploymentList',
        ],
        'createAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'deleteAppsV1CollectionNamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'replaceAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'deleteAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'readAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'replaceAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'patchAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'listAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSetList',
        ],
        'createAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'deleteAppsV1CollectionNamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'replaceAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'deleteAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'readAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'replaceAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'patchAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'listAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSetList',
        ],
        'createAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'deleteAppsV1CollectionNamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'replaceAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'deleteAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'readAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'replaceAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'patchAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'listAppsV1ReplicaSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSetList',
        ],
        'listAppsV1StatefulSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSetList',
        ],
        'watchAppsV1ControllerRevisionListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1DaemonSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1DeploymentListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedControllerRevisionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDaemonSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDeploymentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedReplicaSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedStatefulSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1ReplicaSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1StatefulSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAppsV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAppsV1beta1ControllerRevisionForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevisionList',
        ],
        'listAppsV1beta1DeploymentForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\DeploymentList',
        ],
        'listAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevisionList',
        ],
        'createAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
        ],
        'deleteAppsV1beta1CollectionNamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
        ],
        'replaceAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
        ],
        'deleteAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\ControllerRevision',
        ],
        'listAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\DeploymentList',
        ],
        'createAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'deleteAppsV1beta1CollectionNamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'replaceAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'deleteAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'createAppsV1beta1NamespacedDeploymentRollback' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\DeploymentRollback',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\DeploymentRollback',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\DeploymentRollback',
        ],
        'readAppsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'replaceAppsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'patchAppsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'readAppsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'replaceAppsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'patchAppsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Deployment',
        ],
        'listAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSetList',
        ],
        'createAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'deleteAppsV1beta1CollectionNamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'replaceAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'deleteAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'readAppsV1beta1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'replaceAppsV1beta1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'patchAppsV1beta1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\Scale',
        ],
        'readAppsV1beta1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'replaceAppsV1beta1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'patchAppsV1beta1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSet',
        ],
        'listAppsV1beta1StatefulSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta1\\StatefulSetList',
        ],
        'watchAppsV1beta1ControllerRevisionListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1DeploymentListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedControllerRevisionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedDeploymentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedStatefulSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta1StatefulSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAppsV1beta2APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAppsV1beta2ControllerRevisionForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevisionList',
        ],
        'listAppsV1beta2DaemonSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSetList',
        ],
        'listAppsV1beta2DeploymentForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DeploymentList',
        ],
        'listAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevisionList',
        ],
        'createAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
        ],
        'deleteAppsV1beta2CollectionNamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
        ],
        'replaceAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
        ],
        'deleteAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ControllerRevision',
        ],
        'listAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSetList',
        ],
        'createAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'deleteAppsV1beta2CollectionNamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'replaceAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'deleteAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'readAppsV1beta2NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'replaceAppsV1beta2NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'patchAppsV1beta2NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DaemonSet',
        ],
        'listAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\DeploymentList',
        ],
        'createAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'deleteAppsV1beta2CollectionNamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'replaceAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'deleteAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'readAppsV1beta2NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'replaceAppsV1beta2NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'patchAppsV1beta2NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'readAppsV1beta2NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'replaceAppsV1beta2NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'patchAppsV1beta2NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Deployment',
        ],
        'listAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSetList',
        ],
        'createAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'deleteAppsV1beta2CollectionNamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'replaceAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'deleteAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'readAppsV1beta2NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'replaceAppsV1beta2NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'patchAppsV1beta2NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'readAppsV1beta2NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'replaceAppsV1beta2NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'patchAppsV1beta2NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSet',
        ],
        'listAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSetList',
        ],
        'createAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'deleteAppsV1beta2CollectionNamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'replaceAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'deleteAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'readAppsV1beta2NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'replaceAppsV1beta2NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'patchAppsV1beta2NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\Scale',
        ],
        'readAppsV1beta2NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'replaceAppsV1beta2NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'patchAppsV1beta2NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSet',
        ],
        'listAppsV1beta2ReplicaSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\ReplicaSetList',
        ],
        'listAppsV1beta2StatefulSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1beta2\\StatefulSetList',
        ],
        'watchAppsV1beta2ControllerRevisionListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2DaemonSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2DeploymentListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedControllerRevisionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedDaemonSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedDeploymentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedReplicaSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedStatefulSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2ReplicaSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1beta2StatefulSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAuthenticationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAuthenticationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthenticationV1TokenReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
        ],
        'getAuthenticationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthenticationV1beta1TokenReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1beta1\\TokenReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1beta1\\TokenReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1beta1\\TokenReview',
        ],
        'getAuthorizationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAuthorizationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthorizationV1NamespacedLocalSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
        ],
        'createAuthorizationV1SelfSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
        ],
        'createAuthorizationV1SelfSubjectRulesReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
        ],
        'createAuthorizationV1SubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
        ],
        'getAuthorizationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthorizationV1beta1NamespacedLocalSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\LocalSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\LocalSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\LocalSubjectAccessReview',
        ],
        'createAuthorizationV1beta1SelfSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectAccessReview',
        ],
        'createAuthorizationV1beta1SelfSubjectRulesReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectRulesReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectRulesReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SelfSubjectRulesReview',
        ],
        'createAuthorizationV1beta1SubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1beta1\\SubjectAccessReview',
        ],
        'getAutoscalingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAutoscalingV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscalerList',
        ],
        'listAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscalerList',
        ],
        'createAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV1NamespacedHorizontalPodAutoscalerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAutoscalingV2beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAutoscalingV2beta1HorizontalPodAutoscalerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscalerList',
        ],
        'listAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscalerList',
        ],
        'createAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV2beta1CollectionNamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'readAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'patchAutoscalingV2beta1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2beta1\\HorizontalPodAutoscaler',
        ],
        'watchAutoscalingV2beta1HorizontalPodAutoscalerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV2beta1NamespacedHorizontalPodAutoscalerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV2beta1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getBatchAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getBatchV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listBatchV1JobForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\JobList',
        ],
        'listBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\JobList',
        ],
        'createBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'deleteBatchV1CollectionNamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'replaceBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'deleteBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'readBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'replaceBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'patchBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'watchBatchV1JobListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedJobList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getBatchV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listBatchV1beta1CronJobForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJobList',
        ],
        'listBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJobList',
        ],
        'createBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'deleteBatchV1beta1CollectionNamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'replaceBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'deleteBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'readBatchV1beta1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'replaceBatchV1beta1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'patchBatchV1beta1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1beta1\\CronJob',
        ],
        'watchBatchV1beta1CronJobListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1beta1NamespacedCronJobList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1beta1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getBatchV2alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listBatchV2alpha1CronJobForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJobList',
        ],
        'listBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJobList',
        ],
        'createBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'deleteBatchV2alpha1CollectionNamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'replaceBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'deleteBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'readBatchV2alpha1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'replaceBatchV2alpha1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'patchBatchV2alpha1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V2alpha1\\CronJob',
        ],
        'watchBatchV2alpha1CronJobListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV2alpha1NamespacedCronJobList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV2alpha1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCertificatesAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getCertificatesV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequestList',
        ],
        'createCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'deleteCertificatesV1beta1CollectionCertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'deleteCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1beta1CertificateSigningRequestApproval' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1beta1CertificateSigningRequestStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\CertificateSigningRequest',
        ],
        'watchCertificatesV1beta1CertificateSigningRequestList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCertificatesV1beta1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getEventsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getEventsV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listEventsV1beta1EventForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\EventList',
        ],
        'listEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\EventList',
        ],
        'createEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
        ],
        'deleteEventsV1beta1CollectionNamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
        ],
        'replaceEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
        ],
        'deleteEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1beta1\\Event',
        ],
        'watchEventsV1beta1EventListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchEventsV1beta1NamespacedEventList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchEventsV1beta1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getExtensionsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getExtensionsV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listExtensionsV1beta1DaemonSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSetList',
        ],
        'listExtensionsV1beta1DeploymentForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DeploymentList',
        ],
        'listExtensionsV1beta1IngressForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\IngressList',
        ],
        'listExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSetList',
        ],
        'createExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'deleteExtensionsV1beta1CollectionNamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'replaceExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'deleteExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'readExtensionsV1beta1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'replaceExtensionsV1beta1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'patchExtensionsV1beta1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DaemonSet',
        ],
        'listExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DeploymentList',
        ],
        'createExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'deleteExtensionsV1beta1CollectionNamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'replaceExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'deleteExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'createExtensionsV1beta1NamespacedDeploymentRollback' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DeploymentRollback',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DeploymentRollback',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\DeploymentRollback',
        ],
        'readExtensionsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'replaceExtensionsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'patchExtensionsV1beta1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'readExtensionsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'replaceExtensionsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'patchExtensionsV1beta1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Deployment',
        ],
        'listExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\IngressList',
        ],
        'createExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'deleteExtensionsV1beta1CollectionNamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'replaceExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'deleteExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'readExtensionsV1beta1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'replaceExtensionsV1beta1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'patchExtensionsV1beta1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Ingress',
        ],
        'listExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicyList',
        ],
        'createExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
        ],
        'deleteExtensionsV1beta1CollectionNamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
        ],
        'replaceExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
        ],
        'deleteExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicy',
        ],
        'listExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSetList',
        ],
        'createExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'deleteExtensionsV1beta1CollectionNamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'replaceExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'deleteExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'readExtensionsV1beta1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'replaceExtensionsV1beta1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'patchExtensionsV1beta1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'readExtensionsV1beta1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'replaceExtensionsV1beta1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'patchExtensionsV1beta1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSet',
        ],
        'readExtensionsV1beta1NamespacedReplicationControllerDummyScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'replaceExtensionsV1beta1NamespacedReplicationControllerDummyScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'patchExtensionsV1beta1NamespacedReplicationControllerDummyScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\Scale',
        ],
        'listExtensionsV1beta1NetworkPolicyForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\NetworkPolicyList',
        ],
        'listExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicyList',
        ],
        'createExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
        ],
        'deleteExtensionsV1beta1CollectionPodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
        ],
        'replaceExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
        ],
        'deleteExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\PodSecurityPolicy',
        ],
        'listExtensionsV1beta1ReplicaSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Extensions\\V1beta1\\ReplicaSetList',
        ],
        'watchExtensionsV1beta1DaemonSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1DeploymentListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1IngressListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedDaemonSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedDeploymentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedIngressList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedNetworkPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedReplicaSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1NetworkPolicyListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1PodSecurityPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1PodSecurityPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchExtensionsV1beta1ReplicaSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getNetworkingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getNetworkingV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicyList',
        ],
        'createNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'deleteNetworkingV1CollectionNamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'replaceNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'deleteNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'listNetworkingV1NetworkPolicyForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicyList',
        ],
        'watchNetworkingV1NamespacedNetworkPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NetworkPolicyListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getPolicyAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getPolicyV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listPolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudgetList',
        ],
        'createPolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'deletePolicyV1beta1CollectionNamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readPolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'replacePolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'deletePolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchPolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'readPolicyV1beta1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'replacePolicyV1beta1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'patchPolicyV1beta1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudget',
        ],
        'listPolicyV1beta1PodDisruptionBudgetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1beta1\\PodDisruptionBudgetList',
        ],
        'watchPolicyV1beta1NamespacedPodDisruptionBudgetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchPolicyV1beta1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchPolicyV1beta1PodDisruptionBudgetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getRbacAuthorizationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getRbacAuthorizationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBindingList',
        ],
        'createRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1CollectionClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'replaceRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'listRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleList',
        ],
        'createRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1CollectionClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'replaceRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'listRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBindingList',
        ],
        'createRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1CollectionNamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'replaceRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'listRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleList',
        ],
        'createRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'deleteRbacAuthorizationV1CollectionNamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'replaceRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'deleteRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'listRbacAuthorizationV1RoleBindingForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBindingList',
        ],
        'listRbacAuthorizationV1RoleForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleList',
        ],
        'watchRbacAuthorizationV1ClusterRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1RoleBindingListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1RoleListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getRbacAuthorizationV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBindingList',
        ],
        'createRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1alpha1CollectionClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
        ],
        'replaceRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleBinding',
        ],
        'listRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRoleList',
        ],
        'createRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1alpha1CollectionClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
        ],
        'replaceRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\ClusterRole',
        ],
        'listRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBindingList',
        ],
        'createRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1alpha1CollectionNamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
        ],
        'replaceRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBinding',
        ],
        'listRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleList',
        ],
        'createRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
        ],
        'deleteRbacAuthorizationV1alpha1CollectionNamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
        ],
        'replaceRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
        ],
        'deleteRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\Role',
        ],
        'listRbacAuthorizationV1alpha1RoleBindingForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleBindingList',
        ],
        'listRbacAuthorizationV1alpha1RoleForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1alpha1\\RoleList',
        ],
        'watchRbacAuthorizationV1alpha1ClusterRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1ClusterRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1NamespacedRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1NamespacedRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1RoleBindingListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1alpha1RoleListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getRbacAuthorizationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBindingList',
        ],
        'createRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1beta1CollectionClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
        ],
        'replaceRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleBinding',
        ],
        'listRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRoleList',
        ],
        'createRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1beta1CollectionClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
        ],
        'replaceRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\ClusterRole',
        ],
        'listRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBindingList',
        ],
        'createRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
        ],
        'replaceRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBinding',
        ],
        'listRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleList',
        ],
        'createRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
        ],
        'deleteRbacAuthorizationV1beta1CollectionNamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
        ],
        'replaceRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
        ],
        'deleteRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\Role',
        ],
        'listRbacAuthorizationV1beta1RoleBindingForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleBindingList',
        ],
        'listRbacAuthorizationV1beta1RoleForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1beta1\\RoleList',
        ],
        'watchRbacAuthorizationV1beta1ClusterRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1ClusterRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1NamespacedRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1NamespacedRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1beta1RoleListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getSchedulingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getSchedulingV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClassList',
        ],
        'createSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
        ],
        'deleteSchedulingV1alpha1CollectionPriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
        ],
        'replaceSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
        ],
        'deleteSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1alpha1\\PriorityClass',
        ],
        'watchSchedulingV1alpha1PriorityClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchSchedulingV1alpha1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getSettingsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getSettingsV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPresetList',
        ],
        'createSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
        ],
        'deleteSettingsV1alpha1CollectionNamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
        ],
        'replaceSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
        ],
        'deleteSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPreset',
        ],
        'listSettingsV1alpha1PodPresetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Settings\\V1alpha1\\PodPresetList',
        ],
        'watchSettingsV1alpha1NamespacedPodPresetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchSettingsV1alpha1NamespacedPodPreset' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchSettingsV1alpha1PodPresetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getStorageV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClassList',
        ],
        'createStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'deleteStorageV1CollectionStorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'replaceStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'deleteStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'watchStorageV1StorageClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachmentList',
        ],
        'createStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
        ],
        'deleteStorageV1alpha1CollectionVolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
        ],
        'replaceStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
        ],
        'deleteStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttachment',
        ],
        'watchStorageV1alpha1VolumeAttachmentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1alpha1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClassList',
        ],
        'createStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
        ],
        'deleteStorageV1beta1CollectionStorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
        ],
        'replaceStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
        ],
        'deleteStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\StorageClass',
        ],
        'watchStorageV1beta1StorageClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1beta1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCodeVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Version\\Info',
        ],
    ];


}

