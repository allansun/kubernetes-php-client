<?php

namespace CodeGenerator\Command;


use GitWrapper\GitWorkingCopy;
use GitWrapper\GitWrapper;
use GuzzleHttp\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class RunCommand extends Command
{
    protected $githubDeployKeyFile = APP_ROOT . '/github_deploy_key';
    protected $swaggerFile = APP_ROOT . '/openapi/swagger.json';
    /** @var GitWorkingCopy */
    protected $GitWorkingCopy;


    protected function configure()
    {
        $this->setName('run')
            ->setDescription('Pull Swagger file from Kubernetes github')
            ->addArgument('version', InputArgument::REQUIRED, 'Kubernetes version number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $version = $input->getArgument('version');

//        $this->validateGitPrivateKey();

        $Git = new GitWrapper();
//        $Git->setPrivateKey($this->githubDeployKeyFile);
        $this->GitWorkingCopy = $Git->workingCopy(APP_ROOT);


        $this->checkOutBranch($version)
//            ->pullSwagger($version)
//            ->generateCode($input, $output)
//            ->cleanUp()
            ->commitAndPush($version);
    }

    protected function validateGitPrivateKey()
    {
        if (!file_exists($this->githubDeployKeyFile)) {
            if (isset($_ENV['GITHUB_DEPLOY_KEY'])) {
                $handler = fopen($this->githubDeployKeyFile, 'w');
                fwrite($handler, $_ENV['GITHUB_DEPLOY_KEY']);
                fclose($handler);
            } else {
                throw new \Exception('GITHUB_DEPLOY_KEY undefined!');
            }
        }

        return $this;
    }


    protected function checkOutBranch($version)
    {
        if ($this->GitWorkingCopy->run('rev-parse', ["--verify --quiet ${version}"])) {
            $this->GitWorkingCopy->checkout($version);
        } else {
            $this->GitWorkingCopy->checkoutNewBranch($version);
        }

        return $this;
    }

    protected function pullSwagger($version)
    {
        $Guzzle     = new Client();
        $FileSystem = new Filesystem();

        $FileSystem->touch($this->swaggerFile);

        $file                 = fopen(realpath($this->swaggerFile), 'w');
        $kubernetesSwaggerURL =
            "https://raw.githubusercontent.com/kubernetes/kubernetes/${version}/api/openapi-spec/swagger.json";

        $Guzzle->get($kubernetesSwaggerURL, ['save_to' => $file]);

        return $this;
    }

    protected function generateCode(InputInterface $input, OutputInterface $output)
    {
        $Conmmand = $this->getApplication()->find('generate');


        $Conmmand->run(new ArrayInput(['command' => 'generate']), $output);

        return $this;
    }

    protected function cleanUp()
    {
        unlink($this->githubDeployKeyFile);

        return $this;
    }

    protected function commitAndPush($version)
    {
        $this->GitWorkingCopy->run('add', ['-A']);
        $this->GitWorkingCopy->commit("Generated against Kubernetes version ${version}");

        return $this;
    }
}