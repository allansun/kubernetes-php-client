<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * WindowsSecurityContextOptions contain Windows-specific options and credentials.
 */
class WindowsSecurityContextOptions extends AbstractModel
{

    /**
     * GMSACredentialSpec is where the GMSA admission webhook
     * (https://github.com/kubernetes-sigs/windows-gmsa) inlines the contents of the
     * GMSA credential spec named by the GMSACredentialSpecName field. This field is
     * alpha-level and is only honored by servers that enable the WindowsGMSA feature
     * flag.
     *
     * @var string
     */
    public $gmsaCredentialSpec = null;

    /**
     * GMSACredentialSpecName is the name of the GMSA credential spec to use. This
     * field is alpha-level and is only honored by servers that enable the WindowsGMSA
     * feature flag.
     *
     * @var string
     */
    public $gmsaCredentialSpecName = null;


}

