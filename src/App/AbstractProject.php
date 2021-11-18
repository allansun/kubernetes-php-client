<?php

namespace Kubernetes\App;


use Kubernetes\API;
use Kubernetes\App\Deployment\AbstractDeployment;
use Kubernetes\Model;
use Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

abstract class AbstractProject
{
    use ProjectBranchBasedTrait;

    protected $project;
    protected $branch;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var Model\Io\K8s\Api\Core\V1\ConfigMap[]
     */
    protected $configMaps = [];

    /**
     * @var AbstractDeployment[]
     */
    protected $deployments = [];

    /**
     * @var Model\Io\K8s\Api\Core\V1\Service[]
     */
    protected $services = [];

    /**
     * @var Model\Io\K8s\Api\Extensions\V1beta1\Ingress[]
     */
    protected $ingresses = [];

    /**
     * @var Model\Io\K8s\Api\Batch\V1\Job[]
     */
    protected $jobs = [];

    /**
     * @var Model\Io\K8s\Api\Batch\V1beta1\CronJob[]
     */
    protected $cronJobs = [];

    /**
     * @var Model\Io\K8s\Api\Core\V1\PersistentVolumeClaim[]
     */
    protected $persistentVolumeClaims = [];

    /**
     * @var Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler[]
     */
    protected $horizontalPodAutoscalers = [];

    /**
     * @var Model\Io\K8s\Api\Policy\V1beta1\PodDisruptionBudget[]
     */
    protected $podDisruptionBudgets = [];

    protected $dockerImages = [];

    /** @var string Kubernetes Namespace to be deployed in */
    protected $namespace;

    public function __construct($project, $branch = GitBranch::MASTER)
    {
        $this->project = $project;
        $this->branch  = $branch;

        $this->namespace = LabelGenerator::generateNamesapce($project, $branch);

        $this->logger = new NullLogger();

        $this->init();
    }

    abstract public function init();

    public function deploy($forceIngressRedeploy = false)
    {
        $this->preDeploy();
        $ConfigMapAPI               = new API\ConfigMap();
        $DeploymentAPI              = new API\Deployment();
        $ServiceAPI                 = new API\Service();
        $IngressAPI                 = new API\Ingress();
        $JobAPI                     = new API\Job();
        $CronJobAPI                 = new API\CronJob();
        $PodAPI                     = new API\Pod();
        $PersistentVolumeClaimAPI   = new API\PersistentVolumeClaim();
        $HorizontalPodAutoscalerAPI = new API\HorizontalPodAutoscaler();
        $PodDisruptionBudgetAPI     = new API\PodDisruptionBudget();

        $this->logger->info('Start deploying project ...');

        foreach ($this->persistentVolumeClaims as $PersistentVolumeClaim) {
            $this->logger->info('Deploying PersistentVolumeClaim [' . $PersistentVolumeClaim->metadata->name . ']');
            if ('PersistentVolumeClaim' != $PersistentVolumeClaimAPI->read($this->namespace,
                    $PersistentVolumeClaim->kind)) {
                $PersistentVolumeClaimAPI->create($this->namespace, $PersistentVolumeClaim);
            }

            $this->logger->info('PersistentVolumeClaim [' . $PersistentVolumeClaim->metadata->name .
                                '] successfully deployed.');
        }

        foreach ($this->configMaps as $ConfigMap) {
            $this->logger->info('Deploying configMap [' . $ConfigMap->metadata->name . ']');
            if ('ConfigMap' != $ConfigMapAPI->create($this->namespace, $ConfigMap)->kind) {
                $this->logger->info('ConfigMap [' . $ConfigMap->metadata->name . '] existed already, reploying...');
                $ConfigMapAPI->replace($this->namespace, $ConfigMap->metadata->name, $ConfigMap);
            }
            $this->logger->info('ConfigMap [' . $ConfigMap->metadata->name . '] successfully deployed.');
        }

        // Deployments are normally changed every time we update our code repo, so we should always update them
        foreach ($this->deployments as $Deployment) {
            $this->logger->info('Deploying deployment [' . $Deployment->metadata->name . ']');
            if ('Deployment' != $DeploymentAPI->create($this->namespace, $Deployment)->kind) {
                $this->logger->info('Deployment [' . $Deployment->metadata->name . '] existed already, reploying...');
                $Deployment->spec->template->metadata->annotations['app.k8s.io/update-timestamp'] = date('c');
                $DeploymentAPI->replace($this->namespace, $Deployment->metadata->name, $Deployment);
            }
            $this->logger->info('Deployment [' . $Deployment->metadata->name . '] successfully deployed.');
        }

        // Once a service is deployed, we don't need to update it. If needed we should destroy the whole project and
        // then recreate
        foreach ($this->services as $Service) {
            if ('Service' != $ServiceAPI->read($this->namespace, $Service->metadata->name)->kind) {
                $this->logger->info('Deploying service [' . $Service->metadata->name . ']');
                $ServiceAPI->create($this->namespace, $Service);
                $this->logger->info('Service [' . $Service->metadata->name . '] successfully deployed.');
            }
        }

        foreach ($this->jobs as $Job) {
            if ('Job' == $JobAPI->read($this->namespace, $Job->metadata->name)->kind) {
                $this->logger->info('Found job [' . $Job->metadata->name . '], deleting...');
                $JobAPI->delete($this->namespace, $Job->metadata->name, new DeleteOptions());

                $labelSelector = LabelGenerator::generateProjectBranchServiceJobSelector($this->project, $this->branch,
                    $Job->metadata->name);
                $PodAPI->deleteCollection($this->namespace, new DeleteOptions(['labelSelector' => $labelSelector]));

                sleep(5);
            }
            $this->logger->info('Deploying job [' . $Job->metadata->name . ']');
            $JobAPI->create($this->namespace, $Job);
            $this->logger->info('Job [' . $Job->metadata->name . '] successfully deployed.');
        }


        foreach ($this->cronJobs as $CronJob) {
            if ('CronJob' == $CronJobAPI->read($this->namespace, $CronJob->metadata->name)->kind) {
                $this->logger->info('Found cron job [' . $CronJob->metadata->name . '], replacing...');
                $CronJobAPI->replace($this->namespace, $CronJob->metadata->name, $CronJob);
                sleep(5);
            }
            $this->logger->info('Deploying cron job [' . $CronJob->metadata->name . ']');
            $response = $CronJobAPI->create($this->namespace, $CronJob);
            $this->logger->info(var_export($response, true));
            $this->logger->info('Cron Job [' . $CronJob->metadata->name . '] successfully deployed.');
        }

        foreach ($this->ingresses as $Ingress) {
            $this->logger->info('Deploying ingress [' . $Ingress->metadata->name . ']');
            if ('Ingress' != $IngressAPI->create($this->namespace, $Ingress)->kind) {
                if ($forceIngressRedeploy) {
                    $this->logger->info('Ingress [' . $Ingress->metadata->name . '] existed already, reploying...');
                    $IngressAPI->replace($this->namespace, $Ingress->metadata->name, $Ingress);
                }
            }
            $this->logger->info('Ingress [' . $Ingress->metadata->name . '] successfully deployed.');
        }

        foreach ($this->horizontalPodAutoscalers as $HorizontalPodAutoscaler) {
            $this->logger->info('Deploying Horizontal Pod Autoscaler [' . $HorizontalPodAutoscaler->metadata->name .
                                ']');
            if ('HorizontalPodAutoscaler' !=
                $HorizontalPodAutoscalerAPI->create($this->namespace, $HorizontalPodAutoscaler)->kind) {
                $this->logger->info('Horizontal Pod Autoscaler [' . $HorizontalPodAutoscaler->metadata->name .
                                    '] existed already, reploying...');
                $HorizontalPodAutoscalerAPI->replace($this->namespace, $HorizontalPodAutoscaler->metadata->name,
                    $HorizontalPodAutoscaler);
            }
            $this->logger->info('Horizontal Pod Autoscaler [' . $HorizontalPodAutoscaler->metadata->name .
                                '] successfully deployed.');
        }

        foreach ($this->podDisruptionBudgets as $PodDisruptionBudget) {
            $this->logger->info('Deploying PodDisruptionBudget [' . $PodDisruptionBudget->metadata->name .
                                ']');
            if ('HorizontalPodAutoscaler' !=
                $PodDisruptionBudgetAPI->create($this->namespace, $PodDisruptionBudget)->kind) {
                $this->logger->info('PodDisruptionBudget [' . $PodDisruptionBudget->metadata->name .
                                    '] existed already, reploying...');
                $PodDisruptionBudgetAPI->delete($this->namespace, $PodDisruptionBudget->metadata->name,
                    new DeleteOptions());
                $PodDisruptionBudgetAPI->create($this->namespace, $PodDisruptionBudget);
            }
            $this->logger->info('PodDisruptionBudget [' . $PodDisruptionBudget->metadata->name .
                                '] successfully deployed.');
        }


        $this->postDeploy();
        $this->logger->info('[DONE]');
    }

    /**
     * Build namespace and relevant required components
     */
    protected function preDeploy()
    {
        //Prepare namespace
        $NamespaceAPI = new API\KubernetesNamespace();
        if ('Namespace' != $NamespaceAPI->read($this->namespace)->kind) {
            $Namspace = new Model\Io\K8s\Api\Core\V1\KubernetesNamespace([
                'metadata' => [
                    'name' => $this->namespace
                ]
            ]);
            $this->logger->info('Create namespace [' . $Namspace->metadata->name . ']');
            $NamespaceAPI->create($Namspace);
        }

        // Set PodAntiAffinity to make sure each deployment is deployed on different machine, default to false
        foreach ($this->deployments as &$Deployment) {
            if ($Deployment->isPodAntiAffinity) {
                $Deployment->spec->template->spec->affinity = new Model\Io\K8s\Api\Core\V1\Affinity([
                    'podAntiAffinity' => [
                        'requiredDuringSchedulingIgnoredDuringExecution' => [
                            [
                                'labelSelector' => [
                                    'matchLabels' => $Deployment->metadata->labels
                                ],
                                'topologyKey' => 'kubernetes.io/hostname'
                            ]
                        ]
                    ]
                ]);
            }
        }
    }

    protected function postDeploy()
    {
    }

    public function destroy()
    {
        $this->preDestroy();

        $NamespaceAPI = new API\KubernetesNamespace();
        $NamespaceAPI->delete($this->namespace, new DeleteOptions());

        $this->postDestroy();
        $this->logger->info('[Done]');
    }

    protected function preDestroy()
    {
    }

    protected function postDestroy()
    {
    }

    /**
     * @param  LoggerInterface  $logger
     *
     * @return $this
     */
    public function attachLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

}