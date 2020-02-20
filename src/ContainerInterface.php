<?php
declare(strict_types=1);

namespace Awful85\Rbac;

use Awful85\Rbac\Service\Auth;
use Awful85\Rbac\Service\Hydrator;
use Awful85\Rbac\Service\Permission;
use Awful85\Rbac\Service\Serializer;
use Awful85\Rbac\Service\User;
use Awful85\Rbac\Validation\Factory as ValidationFactory;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;

interface ContainerInterface extends \Psr\Container\ContainerInterface
{
    public function getHydratorService(): Hydrator;

    public function getAuthService(): Auth;

    public function getUserService(): User;

    public function getPermissionService(): Permission;

    public function getSerializerService(): Serializer;

    public function getValidationFactory(): ValidationFactory;

    public function setValidationFactory(ValidationFactory $validationFactory): self;

    public function setLogger(LoggerInterface $logger): ContainerInterface;

    public function getLogger(): LoggerInterface;

    public function getLibraryRootPath(): string;

    public function getDocumentManager(): DocumentManager;
}