<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class IntegerPermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class IntegerPermission extends ScalarPermission
{
    /**
     * @var int|null
     * @ODM\Field(type="int")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_INTEGER;

    /**
     * @return int|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param int|null $scope
     * @return IntegerPermission
     */
    public function setScope(?int $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
