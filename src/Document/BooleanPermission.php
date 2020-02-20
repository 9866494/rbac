<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class BooleanPermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class BooleanPermission extends ScalarPermission
{
    /**
     * @var bool|null
     * @ODM\Field(type="bool")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_BOOL;

    /**
     * @return bool|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param bool|null $scope
     * @return BooleanPermission
     */
    public function setScope(?bool $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
