<?php
/*
 * This file is part of Kubernete Client.
 *
 * (c) Allan Sun <allan.sun@bricre.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kubernetes;

use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

class Logger
{
    /**
     * @var Logger
     */
    static private $instance;

    /**
     * @var LoggerInterface|\Monolog\Logger
     */
    private $logger;

    /**
     * Logger constructor.
     */
    private function __construct()
    {
        $this->logger = new \Monolog\Logger('Kubernetes');
        $this->logger->pushHandler(new StreamHandler('php://stdout'));
    }

    /**
     * This function is only intended to be used in unit test
     * You do not normally need to call it
     *
     * @return Logger
     */
    static public function reInitiate()
    {
        static::$instance = null;

        return self::getInstance();
    }

    /**
     * @return Logger
     */
    static public function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new Logger();
        }

        return static::$instance;
    }

    /**
     * @param       $message
     * @param array $extra
     *
     * @return $this
     */
    public function debug($message, $extra = [])
    {
        if (getenv('DEBUG')) {
            $this->logger->debug($message, $extra);
        }

        return $this;
    }

    public function info($message, $extra = [])
    {
        $this->logger->info($message, $extra);
    }

    /**
     * @return LoggerInterface|\Monolog\Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }
}