<?php
declare(strict_types=1);

namespace Awful85\Rbac;

use Awful85\Rbac\Service\Auth;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;

interface ContainerInterface extends \Psr\Container\ContainerInterface
{
    public function getAuthService(): Auth;

    public function setLogger(LoggerInterface $logger): ContainerInterface;

    public function getLogger(): LoggerInterface;

    public function getDocumentManager(): DocumentManager;
}