<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

class BooleanPermission extends ScalarPermission
{
    /**
     * @var bool|null
     */
    protected $scope;

    /**
     * @return bool|null
     */
    public function getScope(): ?bool
    {
        return $this->scope;
    }

    /**
     * @param bool|null $scope
     */
    public function setScope(?bool $scope): void
    {
        $this->scope = $scope;
    }

}