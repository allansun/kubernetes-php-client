# Kubernetes-PHP-Client (`kpc`)

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D7.1-green.svg?style=plastic)](https://php.net/)
[![Gitter](https://badges.gitter.im/allansun/kubernetes-php-api.svg?style=plastic)](https://gitter.im/allansun/kubernetes-php-api?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

This is a full PHP client reverse engineered from Kubernetes' Swagger defination.

You can control your Kubernetes cluster in PHP, the programmatical way. 


## Kubernetes Release Compatibility

### Kubernetes Version Support

Since this client is generated from Kubernetes' swagger file, it follows whatever the backward compatibilities 
Kubernetes has. You should use the correct version against your cluster.

One exception, in regards to compatibility, `kpc` supports the equivalent Kubernetes minor release number. A minor 
version is the second digit in the release number. `kpc` version 1.8.0 has a minor version of 8. The numbering follows 
the semantic versioning specification, MAJOR.MINOR.PATCH.

For example, `kpc` 1.8.0 does not support Kubernetes 1.9.2, but `kpc` 1.9.0 supports Kubernetes 1.9.2 and previous 
Kubernetes versions. Only when `kpc` minor version matches, the Kubernetes minor version does `kpc` officially support 
the Kubernetes release. `kpc` does not stop a user from using mismatching versions of K8s, but Kubernetes releases 
always require `kpc` to install specific versions of components like docker, that tested against the particular 
Kubernetes version.

`kpc` does not neccessarily follow the PATCH number of Kubernetes release. Each minor version is generated against 
latest minor version of Kubernetes lease.

### Compatibility Matrix

| kpc version | k8s 1.7.x | k8s 1.8.x | k8s 1.9.x | k8s 1.10.x | k8s 1.11.x |
|-------------|-----------|-----------|-----------|------------|------------|
| 1.11.x      | Y         | Y         | Y         | Y          | Y          |
| 1.10.x      | Y         | Y         | Y         | Y          | N          |
| 1.9.x       | Y         | Y         | Y         | N          | N          |
| 1.8.x       | Y         | Y         | N         | N          | N          |

Use the latest version of kpc for all releases of Kubernetes, with the caveat
that higher versions of Kubernetes are not _officially_ supported by kpc.

### kpc Release Schedule

This project does not follow the Kubernetes release schedule.  `kpc` aims to
provide a reliable usage experience for kubernetes, and typically
releases about a month after the corresponding Kubernetes release. This time
allows for the Kubernetes project to resolve any issues introduced by the new
version and ensures that we can support the latest features. 


## Installation

Add a dependency on kubernetes/php-client to your project's `composer.json` by utilizing the [Composer]
(https://getcomposer.org/) package manager.

```json
{
    "require-dev": {
        "kubernetes/php-client": "~{KUBERNETES_VERSION}"
    }
}
```

{KUBERNETES_VERSION} should match at least the minor version of your Kubernetes cluster.

For example `"kubernetes/php-client": "~1.8"` should be used against Kubernetes version 1.8.x

## Usage instruction


Now you need to configure authentication credentials via a static method, (you only need to do this once).

```php
<?php

require_once('./vendor/autoload.php');

use Kubernetes\Client;
use Kubernetes\API\ConfigMap as ConfigMapAPI;
use Kubernetes\Model\Io\K8s\Api\Core\V1\ConfigMap;

$master         = 'https://you-kubernetes-cluster.com';
$authentication = [
    'caCert' => '/usr/local/your-ca-file-location',
    'token'  => 'base64-based-token'
];

// This configure function only need to run once in the whole session
Client::configure($master, $authentication);

$ConfigMapAPI = new ConfigMapAPI();

$ConfigMap = new ConfigMap([
    'metadata' => [
        'name' => 'kubernetes-php-client-test'
    ],
    'data' => [
        'bar' => 'foo'
    ]
]);

$ConfigMapAPI->create('default',$ConfigMap);

$response = $ConfigMapAPI->read('default','kubernetes-php-client-test');

print_r($response);

/*
Kubernetes\Model\Io\K8s\Api\Core\V1\ConfigMap Object
(
    [apiVersion] => v1
    [data] => Array
        (
            [bar] => foo
        )

    [kind] => ConfigMap
    [metadata] => Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta Object
        (
            [annotations] => 
            [clusterName] => 
            [creationTimestamp] => 2018-08-07T10:32:06Z
            [deletionGracePeriodSeconds] => 
            [deletionTimestamp] => 
            [finalizers] => 
            [generateName] => 
            [generation] => 
            [initializers] => 
            [labels] => 
            [name] => kubernetes-php-client-test
            [namespace] => default
            [ownerReferences] => 
            [resourceVersion] => 24374466
            [selfLink] => /api/v1/namespaces/default/configmaps/kubernetes-php-client-test
            [uid] => 21f7036f-9a2d-11e8-89e9-0eeed2d5ffa8
            [isRawObject:protected] => 
            [rawData:protected] => 
        )

    [isRawObject:protected] => 
    [rawData:protected] => 
)

 */

```

### Authentication

As per discribed in the [documentation](https://kubernetes.io/docs/reference/access-authn-authz/#authentication), you
can use whatever authentication mode suits your requirement.
 
`$authentication` supports following configurations:

* caCert
* clientCert
* clientKey
* token
* username
* password 

### Class naming convension

Kubernetes is written in GoLang, hence its swagger field follows Go naming convention. 

#### Models

`io.k8s.api.batch.v1beta1.CronJob` will be converted to `Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob`

#### APIs

As per swagger definitions, each api endpoint is an independent entry. Luckily Kubernetes provided extra info so we 
can put them into groups, you can find more info in Kubernetes [API](https://kubernetes.io/docs/reference/#api-reference)

`/apis/batch/v1beta1/cronjobs` can be found in `Kubernetes\API\CronJob`

#### Pre-GA release features

As shown CronJob is currently in `v1beta1` status. When you create a 
`Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob()` object, it may later be moved 
`Kubernetes\Model\Io\K8s\Api\Batch\V1\CronJob()`. This is a good way so you would always know which version you 
should be using.

Also, by following the Kubernetes conventions, if you have upgraded your cluster, when CronJob api expects a `v1` 
CronJob, but you haven't upgraded your code to match the version, a PHP error will be prompted:

```
PHP Fatal error:  Uncaught TypeError: Argument 2 passed to Kubernetes\API\CronJob::create() must be an instance of 
Kubernetes\Model\Io\K8s\Api\Batch\V1\CronJob, instance of Kubernetes\Model\Io\K8s\Api\Batch\V1beta1\CronJob 
given,

```

## API Implementations

This API Wrapper implements all API endpoints currently provided by Kubernetes, for full documentation on how to use 
it please refere to [API](https://kubernetes.io/docs/reference/#api-reference)

