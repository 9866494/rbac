<?php

namespace Awful85\Rbac\Test\Service\Permission;

use Awful85\Rbac\Exception\ValidationException;
use Awful85\Rbac\Service\Permission\Dto\Permission;
use Awful85\Rbac\Test\BaseTest;
use Awful85\Rbac\Service\Permission\Dto\BooleanPermission;
use Awful85\Rbac\Validation\Permission\SaveValidator;

class SaveTest extends BaseTest
{
    public function testSuccessfulCreateBoolean()
    {
        $dto = $this->getSerializedDto('Dto/Permission/Save/boolean/validCreate');

        $savedDto = $this->getContainer()->getPermissionService()->save($dto);

        $this->assertPermissionDtoSave($dto, $savedDto);
    }

    public function testSuccessfulUpdateBoolean()
    {
        $createDto = $this->getSerializedDto('Dto/Permission/Save/boolean/validCreate');

        $savedCreateDto = $this->getContainer()->getPermissionService()->save($createDto);

        $updateDto = $this->getSerializedDto('Dto/Permission/Save/boolean/validUpdate');

        $updateDto->setId($savedCreateDto->getId());

        $savedUpdateDto = $this->getContainer()->getPermissionService()->save($updateDto);

        $this->assertPermissionDtoSave($updateDto, $savedUpdateDto);
    }

    public function testInvalidSaveBoolean()
    {
        $dto = $this->getSerializedDto('Dto/Permission/Save/boolean/invalid');

        try {
            $this->getContainer()->getPermissionService()->save($dto);
        } catch (ValidationException $exception) {
            $x = 1;
        }
    }


    public function testUniqueViolationSaveBoolean()
    {
        $dto = $this->getSerializedDto('Dto/Permission/Save/boolean/validCreate');

        $this->getContainer()->getPermissionService()->save($dto);

        try {
            $this->getContainer()->getPermissionService()->save($dto);
        } catch (ValidationException $exception) {
            $this->assertEquals(1, count($exception->getViolations()), 'Exception must contains only one violation');
            $this->assertEquals(SaveValidator::VIOLATION_CODE_UNIQUE, $exception->getViolations()[0]->getCode(), 'Wrong code');
            $this->assertEquals('code', $exception->getViolations()[0]->getField(), 'Wrong field');
        }
    }

    private function assertPermissionDtoSave(Permission $beforeSave, Permission $afterSave)
    {
        $this->assertNotNull($afterSave->getId(), 'Id must be not null');

        $this->assertEquals(get_class($afterSave), get_class($beforeSave), 'Dto class must be identical');

        $this->assertEquals($afterSave->getCategory(), $beforeSave->getCategory(), 'Category must be identical');
        $this->assertEquals($afterSave->getCategoryId(), $beforeSave->getCategoryId(), 'Category id must be identical');
        $this->assertEquals($afterSave->getCode(), $beforeSave->getCode(), 'Code must be identical');
        $this->assertEquals($afterSave->getService(), $beforeSave->getService(), 'Service must be identical');
        $this->assertEquals($afterSave->getName(), $beforeSave->getName(), 'Name must be identical');
        $this->assertEquals($afterSave->getDescription(), $beforeSave->getDescription(), 'Description must be identical');

    }

    private function getSerializedDto(string $fixturePath): Permission
    {
        $permissionString = $this->loadFixture($fixturePath);

        $serializerService = $this->getContainer()->getSerializerService();

        return $serializerService->deserializePermissionJsonString($permissionString);
    }
}