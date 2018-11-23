<?php

namespace CodeGenerator\Command;


use GitWrapper\Event\GitLoggerListener;
use GitWrapper\GitException;
use GitWrapper\GitWorkingCopy;
use GitWrapper\GitWrapper;
use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;

class RunCommand extends Command
{
    protected $githubDeployKeyFile = APP_ROOT . '/github_deploy_key';
    protected $swaggerFile = APP_ROOT . '/openapi/swagger.json';
    /** @var GitWorkingCopy */
    protected $GitWorkingCopy;
    /** @var LoggerInterface */
    protected $logger;

    protected function configure()
    {
        $this->setName('run')
            ->setDescription('Pull Swagger file from Kubernetes github, generate new code and commit.')
            ->addArgument('version', InputArgument::REQUIRED, 'Kubernetes version number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $this->logger = new ConsoleLogger($output);
        $version      = $input->getArgument('version');

        $this->validateGitPrivateKey();

        $Git = new GitWrapper();
        $Git->addLoggerListener(new GitLoggerListener($this->logger));
        if ($this->githubDeployKeyFile) {
            $Git->setPrivateKey($this->githubDeployKeyFile);
        }
        $this->GitWorkingCopy = $Git->workingCopy(APP_ROOT);


        $this
            ->checkOutBranch($version)
            ->pullSwagger($version)
            ->generateCode($output)
            ->cleanUp()
            ->commitAndPush($version);
    }

    protected function validateGitPrivateKey()
    {
        if (isset($_ENV['GITHUB_DEPLOY_KEY'])) {
            $handler = fopen($this->githubDeployKeyFile, 'w');
            fwrite($handler, $_ENV['GITHUB_DEPLOY_KEY']);
            fclose($handler);
        }

        return $this;
    }


    protected function checkOutBranch($version)
    {
        $this->GitWorkingCopy->pull('origin', 'master');
        try {
            $this->GitWorkingCopy->run('rev-parse', ["--verify --quiet ${version}"]);
            $this->GitWorkingCopy->checkout($version);
        } catch (GitException $e) {
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

    protected function generateCode(OutputInterface $output)
    {
        $Conmmand = $this->getApplication()->find('generate');


        $Conmmand->run(new ArrayInput(['command' => 'generate']), $output);

        return $this;
    }

    protected function cleanUp()
    {
        if (isset($_ENV['GITHUB_DEPLOY_KEY'])) {
            unlink($this->githubDeployKeyFile);
        }

        return $this;
    }

    protected function commitAndPush($version)
    {
        $this->GitWorkingCopy->run('add', ['-A']);
        $this->GitWorkingCopy->commit("Generated against Kubernetes version ${version}");
        $this->GitWorkingCopy->tag($version);
        $this->GitWorkingCopy->push('origin', $version, "--set-upstream-to=origin");
        $this->GitWorkingCopy->pushTag($version);

        return $this;
    }
}