<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class FloatPermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class FloatPermission extends ScalarPermission
{
    /**
     * @var float|null
     * @ODM\Field(type="float")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_FLOAT;

    /**
     * @return float|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param float|null $scope
     * @return FloatPermission
     */
    public function setScope(?float $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
