<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;


use Awful85\Rbac\ContainerInjectableInterface;
use Awful85\Rbac\ContainerInterface;
use Awful85\Rbac\Document\User as UserDocument;
use Awful85\Rbac\Document\Permission as PermissionDocument;
use Awful85\Rbac\Repository\PermissionRepository;
use Awful85\Rbac\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;

class BaseService implements ContainerInjectableInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(?ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    /**
     * @param ContainerInterface $container
     * @return BaseService
     */
    public function setContainer(ContainerInterface $container): BaseService
    {
        $this->container = $container;
        return $this;
    }

    protected function getDocumentManager(): DocumentManager
    {
        return $this->getContainer()->getDocumentManager();
    }

    protected function getUserRepository(): UserRepository
    {
        return $this->getContainer()->getDocumentManager()->getRepository(UserDocument::class);
    }

    protected function getPermissionRepository(): PermissionRepository
    {
        return $this->getContainer()->getDocumentManager()->getRepository(PermissionDocument::class);
    }
}