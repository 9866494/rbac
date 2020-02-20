<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;

use Awful85\Rbac\Document\IntegerPermission;
use Awful85\Rbac\Document\IntegerPermission as IntegerPermissionDocument;
use \Awful85\Rbac\Document\Permission as PermissionDocument;
use Awful85\Rbac\Document\BooleanPermission as BooleanPermissionDocument;
use Awful85\Rbac\Document\DatePermission as DatePermissionDocument;
use Awful85\Rbac\Document\DateTimePermission as DateTimePermissionDocument;
use Awful85\Rbac\Document\EnumPermission as EnumPermissionDocument;
use Awful85\Rbac\Document\FloatPermission as FloatPermissionDocument;
use Awful85\Rbac\Document\TimePermission as TimePermissionDocument;
use Awful85\Rbac\Dto\JwtDto;
use Awful85\Rbac\Exception\ValidationException;
use Awful85\Rbac\PermissionInterface;
use Awful85\Rbac\Service\Permission\Dto\DatePermission as DatePermissionDto;
use Awful85\Rbac\Service\Permission\Dto\DateTimePermission as DateTimePermissionDto;
use Awful85\Rbac\Service\Permission\Dto\FloatPermission as FloatPermissionDto;
use Awful85\Rbac\Service\Permission\Dto\IntegerPermission as IntegerPermissionDto;
use \Awful85\Rbac\Service\Permission\Dto\Permission as PermissionDto;
use \Awful85\Rbac\Service\Permission\Dto\BooleanPermission as BooleanPermissionDto;
use \Awful85\Rbac\Service\Permission\Dto\PermissionList as PermissionListDto;
use Awful85\Rbac\Service\Permission\Dto\TimePermission as TimePermissionDto;
use \Awful85\Rbac\Service\Permission\Filter\Permission as PermissionFilter;
use Awful85\Rbac\Validation\Permission\Save;
use Awful85\Rbac\Validation\Permission\SaveValidator;
use Symfony\Component\Validator\Validation;


class Permission extends BaseService
{
    /**
     * @param PermissionDto $permissionDto
     * @param JwtDto|null $jwtDto
     * @return PermissionDto
     * @throws ValidationException
     * @throws \Doctrine\ODM\MongoDB\LockException
     * @throws \Doctrine\ODM\MongoDB\Mapping\MappingException
     * @throws \Doctrine\ODM\MongoDB\MongoDBException
     */
    public function save(PermissionDto $permissionDto, ?JwtDto $jwtDto = null): PermissionDto
    {
        if (!is_null($permissionDto->getId())) {
            $permissionDocument = $this->getPermissionRepository()->find($permissionDto->getId());
        } else {
            $permissionDocument = null;
        }

        $this->validatePermissionSave($permissionDto, $jwtDto);

        $permissionDocument = $this->getContainer()->getHydratorService()->hydratePermissionDtoToDocument($permissionDto, $permissionDocument);

        $this->getDocumentManager()->persist($permissionDocument);
        $this->getDocumentManager()->flush();

        $permissionJson = $this->getContainer()->getSerializerService()->serializeJson($permissionDocument);

        $result = $this->getContainer()->getSerializerService()->deserializePermissionJsonString($permissionJson);

        $this->invalidateCacheByPermissions([$result]);

        return $result;
    }


    /**
     * @param PermissionDto $permissions
     * @return $this
     */
    protected function invalidateCacheByPermissions(array $permissions)
    {
        return $this;
    }

    /**
     * @param PermissionDto $permissionDto
     * @param JwtDto|null $jwtDto
     * @return $this
     * @throws ValidationException
     */
    protected function validatePermissionSave(PermissionDto $permissionDto, ?JwtDto $jwtDto = null)
    {
        $this->getContainer()->getValidationFactory()->getPermissionSaveValidator()->validateOrThrow([$permissionDto, $jwtDto]);

        return $this;
    }

    /**
     * @param PermissionDto[] $permissionDtos
     * @param JwtDto|null $jwtDto
     * @return PermissionDto[]
     */
    public function bulkSavePermission(array $permissionDtos, ?JwtDto $jwtDto = null): array
    {

    }

    protected function mapDtoToDocument(PermissionDto $permissionDto): PermissionDocument
    {
    }

    public function get(string $id, ?JwtDto $jwtDto = null): PermissionDto
    {

    }

    public function getByServiceAndCode(string $code, ?string $service = null, ?JwtDto $jwtDto = null): PermissionDto
    {

    }

    public function getList(int $pageSize = 20, int $page = 1, ?PermissionFilter $permissionFilter = null, ?JwtDto $jwtDto = null): PermissionListDto
    {

    }

    public function remove(PermissionFilter $permissionFilter, ?JwtDto $jwtDto = null)
    {

    }
}