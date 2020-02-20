<?php
declare(strict_types=1);

namespace Awful85\Rbac\Validation;

use Awful85\Rbac\ContainerInjectableInterface;
use Awful85\Rbac\ContainerInterface;
use Awful85\Rbac\Validation\Permission\SaveValidator;

class Factory implements ContainerInjectableInterface
{
    private $container;

    public function __construct(?ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface|null
     */
    public function getContainer(): ?ContainerInterface
    {
        return $this->container;
    }

    public function getPermissionSaveValidator(): SaveValidator
    {
        return new SaveValidator($this);
    }
}