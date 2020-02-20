<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class DatePermission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\Permission")
 */
class DatePermission extends DateTimePermission
{
    /**
     * @var string
     * @ODM\Field(type="string")
     */
    protected $permissionType = PermissionInterface::TYPE_DATE;
}
