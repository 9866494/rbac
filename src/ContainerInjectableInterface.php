<?php
declare(strict_types=1);

namespace Awful85\Rbac;

use Awful85\Rbac\Service\Auth;
use Awful85\Rbac\Service\Hydrator;
use Awful85\Rbac\Service\Permission;
use Awful85\Rbac\Service\Serializer;
use Awful85\Rbac\Service\User;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;

interface ContainerInjectableInterface
{
    public function __construct(?ContainerInterface $container = null);

    public function setContainer(ContainerInterface $container);
}