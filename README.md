# Kubernetes API PHP Wrapper

This is a PHP FULL implementation of [Kubernetes](https://kubernetes.io)'s [API(Ver 1.6)](https://kubernetes.io/docs/api-reference/v1.6/)

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D7-green.svg?style=plastic)](https://php.net/)
[![Gitter](https://badges.gitter.im/allansun/kubernetes-php-api.svg?style=plastic)](https://gitter.im/allansun/kubernetes-php-api?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

## Installation

Add a dependency on kubernetes/api to your project's `composer.json` by utilizing the [Composer](https://getcomposer.org/) package manager.

```json
{
    "require-dev": {
        "kubernetes/api": "@stable"
    }
}
```

## Usage instruction


Now you need to configure authentication credentials via a static method, (you only need to do this once).

```php
Kubernetes\Client::configure('username','apikey');
```


## API Implementations

This API Wrapper implements all API endpoints currently provided by Kubernetes, for full documentation on how to use 
it please refere to [API](https://kubernetes.io/docs/api-reference/v1.6/)

