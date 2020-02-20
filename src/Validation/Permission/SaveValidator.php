<?php
declare(strict_types=1);

namespace Awful85\Rbac\Validation\Permission;


use Awful85\Rbac\Document\Permission;
use Awful85\Rbac\Dto\JwtDto;
use Awful85\Rbac\Repository\PermissionRepository;
use Awful85\Rbac\Validation\AbstractValidator;
use MongoDB\BSON\ObjectId;
use Awful85\Rbac\Service\Permission\Dto\Permission as PermissionDto;


class SaveValidator extends AbstractValidator
{
    const VIOLATION_MONGO_ID = 'violated_mongo_id';
    const VIOLATION_CODE_REQUIRED = 'permission_code_is_required';
    const VIOLATION_CODE_UNIQUE = 'permission_code_is_unique';

    public function vaildate($data): array
    {
        /** @var PermissionDto $permissionDto */
        $permissionDto = $data[0];

        /** @var JwtDto $jwtDto */
        $jwtDto = $data[1];

        if (!is_null($permissionDto->getId())) {
            try {
                new ObjectId($permissionDto->getId());
            } catch (\Throwable $throwable) {
                $this->addViolation('id', static::VIOLATION_MONGO_ID, null, $permissionDto->getId());
            }
        }

        if (is_null($permissionDto->getCode())) {
            $this->addViolation('code', static::VIOLATION_CODE_REQUIRED, null, $permissionDto->getCode());
        }

        $permissionDocument = $this->getPermissionRepository()->getByCodeAndService($permissionDto->getCode(), $permissionDto->getService());

        if ($permissionDocument && $permissionDocument->getId() !== $permissionDto->getId()) {
            $this->addViolation('code', static::VIOLATION_CODE_UNIQUE, null, $permissionDto->getCode());
        }

        return $this->getViolations();
    }

    private function getPermissionRepository(): PermissionRepository
    {
        return $this->getFactory()->getContainer()->getDocumentManager()->getRepository(Permission::class);
    }

}