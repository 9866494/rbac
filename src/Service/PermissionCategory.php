<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;

use Awful85\Rbac\Dto\JwtDto;
use \Awful85\Rbac\Service\PermissionCategory\Dto\PermissionCategory as PermissionCategoryDto;
use \Awful85\Rbac\Service\PermissionCategory\Dto\PermissionCategoryList as PermissionCategoryListDto;
use \Awful85\Rbac\Service\PermissionCategory\Filter\PermissionCategory as PermissionCategoryFilter;


class PermissionCategory extends BaseService
{
    public function save(PermissionCategoryDto $permissionDto, ?JwtDto $jwtDto = null): PermissionCategoryDto
    {

    }

    public function get(string $id, ?JwtDto $jwtDto = null): PermissionCategoryDto
    {

    }

    public function getByServiceAndCode(string $code, ?string $service = null, ?JwtDto $jwtDto = null): PermissionCategoryDto
    {

    }

    public function getList(int $pageSize = 20, int $page = 1, ?PermissionCategoryFilter $permissionFilter = null, ?JwtDto $jwtDto = null): PermissionCategoryListDto
    {

    }

    public function remove(PermissionCategoryFilter $permissionFilter, ?JwtDto $jwtDto = null)
    {

    }
}