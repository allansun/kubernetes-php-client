<?php
/**
 * User: Allan Sun (allan.sun@bricre.com)
 * Date: 05/10/2017
 * Time: 15:26
 */

namespace Kubernetes\App;


use Kubernetes\Model\Io\K8s\Api\Core\V1\Service;
use Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector;
use Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta;

/**
 * Trait ProjectBranchBasedTrait
 *
 * @property ObjectMeta $metadata
 */
trait ProjectBranchBasedTrait
{
    /**
     * @param $project string
     * @param $branch  string
     * @param $service string
     */
    public function injectProjectBranchServiceLabels($project, $branch, $service)
    {
        $this->metadata = new ObjectMeta($this->metadata);

        $labels = LabelGenerator::generateProjectBranchServiceLabelSelector($project, $branch, $service);

        $this->metadata->labels = $labels;


        $this->metadata->name = LabelGenerator::generateName($project, $branch, $service);

        if (isset($this->spec)) {
            if (is_a($this, Service::class)) {
                $this->spec->selector = $labels;
            } else {
                $this->spec->selector = new LabelSelector([
                    'matchLabels' => $labels
                ]);
            }
        }
    }


    /**
     * @param $project string
     * @param $branch  string
     * @param $job     string
     */
    public function injectProjectBranchJobLabels($project, $branch, $job)
    {
        if (!$this->metadata) {
            $this->metadata = new ObjectMeta();
        }

        $this->metadata->labels = LabelGenerator::generateProjectBranchServiceJobSelector($project, $branch, $job);

        if (isset($this->name)) {
            $this->metadata->name =
                LabelGenerator::generateName($project, $branch, $job) . '-' . strtolower($this->name);
        } else {
            $this->metadata->name = LabelGenerator::generateName($project, $branch, $job);
        }
    }


}