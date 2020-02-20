<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class DateTimePermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class DateTimePermission extends ScalarPermission
{
    /**
     * @var \DateTime|null
     * @ODM\Field(type="date")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_DATE_TIME;

    /**
     * @return \DateTime|null
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param \DateTime|null $scope
     * @return DateTimePermission
     */
    public function setScope(?\DateTime $scope)
    {
        $this->scope = $scope;
        return $this;
    }
}
