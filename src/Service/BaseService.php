<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;


use Awful85\Rbac\ContainerInterface;
use Awful85\Rbac\Document\User as UserDocument;
use Awful85\Rbac\Repository\UserRepository;

class BaseService
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * BaseService constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
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

    protected function getUserRepository(): UserRepository
    {
        $this->getContainer()->getDocumentManager()->getRepository(UserDocument::class);
    }

}