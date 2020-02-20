<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\Document\EnumPermission\EnumItem;
use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class EnumPermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class EnumPermission extends ArrayPermission
{
    /**
     * @var array|null
     * @ODM\Field(type="raw")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_ENUM;

    /**
     * @var EnumItem[]
     * @ODM\Field(type="raw")
     */
    private $enum = [];

    /**
     * @return array|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param array|null $scope
     * @return EnumPermission
     */
    public function setScope(?bool $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return EnumItem[]
     */
    public function getEnum(): array
    {
        return $this->enum;
    }

    /**
     * @param EnumItem[] $enum
     * @return EnumPermission
     */
    public function setEnum(array $enum): EnumPermission
    {
        $this->enum = $enum;
        return $this;
    }
}
