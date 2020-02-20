<?php
declare(strict_types=1);

namespace Awful85\Rbac;

use Awful85\Rbac\Container\NotFoundException;
use Awful85\Rbac\Service\Auth;
use Awful85\Rbac\Service\Hydrator;
use Awful85\Rbac\Service\Permission;
use Awful85\Rbac\Service\Serializer;
use Awful85\Rbac\Service\User;
use Awful85\Rbac\Validation\Factory as ValidationFactory;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class Container implements ContainerInterface
{
    /**
     * @var Auth
     */
    private $authService;

    /**
     * @var User
     */
    private $userService;

    /**
     * @var Permission
     */
    private $permissionService;

    /**
     * @var Hydrator
     */
    private $hydratorService;

    /**
     * @var Serializer
     */
    private $serializerService;

    /**
     * @var $validationFactory
     */
    private $validationFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var DocumentManager
     */
    private $documentManager;

    private $services = [];

    /**
     * Container constructor.
     * @param DocumentManager $documentManager
     */
    public function __construct(DocumentManager $documentManager)
    {
        $this->logger = $logger ?? new NullLogger();
        $this->authService = new Auth($this);
        $this->userService = new User($this);
        $this->permissionService = new Permission($this);
        $this->hydratorService = new Hydrator($this);
        $this->serializerService = new Serializer($this);
        $this->validationFactory = new ValidationFactory($this);
        $this->documentManager = $documentManager;
    }

    public function getHydratorService(): Hydrator
    {
        return $this->hydratorService;
    }

    public function getAuthService(): Auth
    {
        return $this->authService;
    }

    public function getUserService(): User
    {
        return $this->userService;
    }

    public function getPermissionService(): Permission
    {
        return $this->permissionService;
    }

    public function getSerializerService(): Serializer
    {
        return $this->serializerService;
    }

    public function getLibraryRootPath(): string
    {
        return realpath(__DIR__ . "/..");
    }


    public function setLogger(LoggerInterface $logger): ContainerInterface
    {
        $this->logger;
        return $this;
    }

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    public function getValidationFactory(): ValidationFactory
    {
        return $this->validationFactory;
    }

    public function setValidationFactory(ValidationFactory $factory): ContainerInterface
    {
        $this->validationFactory = $factory;
        return $this;
    }


    public function get($id)
    {
        if (!isset($this->services[$id])) {
            throw new NotFoundException();
        } else {
            return $this->services[$id];
        }
    }

    public function has($id)
    {
        return isset($this->services[$id]);
    }

    public function getDocumentManager(): DocumentManager
    {
        return $this->documentManager;
    }

}