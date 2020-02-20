<?php
declare(strict_types=1);

namespace Awful85\Rbac\Repository;

use Awful85\Rbac\Document\BooleanPermission;
use Awful85\Rbac\Document\DatePermission;
use Awful85\Rbac\Document\DateTimePermission;
use Awful85\Rbac\Document\EnumPermission;
use Awful85\Rbac\Document\FloatPermission;
use Awful85\Rbac\Document\IntegerPermission;
use Awful85\Rbac\Document\TimePermission;
use Awful85\Rbac\Document\Permission;
use Doctrine\ODM\MongoDB\LockMode;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

/**
 * Class PermissionRepository
 * @package Awful85\Rbac\Repository
 * @method Permission|BooleanPermission|DateTimePermission|DatePermission|TimePermission|EnumPermission|FloatPermission|IntegerPermission|null find($id, int $lockMode = LockMode::NONE, ?int $lockVersion = null) : ?object
 * @method Permission|BooleanPermission|DateTimePermission|DatePermission|TimePermission|EnumPermission|FloatPermission|IntegerPermission|null findOneBy(array $criteria) : ?object
 * @method Permission[]|BooleanPermission[]|DateTimePermission[]|DatePermission[]|TimePermission[]|EnumPermission[]|FloatPermission[]|IntegerPermission[] findAll() : array
 * @method Permission[]|BooleanPermission[]|DateTimePermission[]|DatePermission[]|TimePermission[]|EnumPermission[]|FloatPermission[]|IntegerPermission[] findBy(array $criteria, ?array $sort = null, $limit = null, $skip = null) : array
 */
class PermissionRepository extends DocumentRepository
{
    public function getByCodeAndService(?string $code, ?string $service): ?Permission
    {
        return $this->findOneBy(['code' => $code, 'service' => $service]);
    }
}