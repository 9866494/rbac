<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

use Awful85\Rbac\Dto\AbstractDto;
use Awful85\Rbac\Service\PermissionCategory\Dto\PermissionCategory;

abstract class Permission extends AbstractDto
{
    /**
     * @var string|null
     */
    protected $id = null;

    /**
     * @var string|null
     */
    protected $code = null;

    /**
     * @var string|null
     */
    protected $service = null;

    /**
     * @var string|null
     */
    protected $name = null;

    /**
     * @var string|null
     */
    protected $description = null;

    /**
     * @var string|null
     */
    protected $combiningRule = null;

    /**
     * @var string|null
     */
    protected $categoryId = null;

    /**
     * @var PermissionCategory|null
     */
    protected $category = null;

    /**
     * @var string|null
     */
    protected $permissionType = null;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return Permission
     */
    public function setId(?string $id): Permission
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return Permission
     */
    public function setCode(?string $code): Permission
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * @param string|null $service
     * @return Permission
     */
    public function setService(?string $service): Permission
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Permission
     */
    public function setName(?string $name): Permission
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Permission
     */
    public function setDescription(?string $description): Permission
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCombiningRule(): ?string
    {
        return $this->combiningRule;
    }

    /**
     * @param string|null $combiningRule
     * @return Permission
     */
    public function setCombiningRule(?string $combiningRule): Permission
    {
        $this->combiningRule = $combiningRule;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * @param string|null $categoryId
     * @return Permission
     */
    public function setCategoryId(?string $categoryId): Permission
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return PermissionCategory|null
     */
    public function getCategory(): ?PermissionCategory
    {
        return $this->category;
    }

    /**
     * @param PermissionCategory|null $category
     * @return Permission
     */
    public function setCategory(?PermissionCategory $category): Permission
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPermissionType(): ?string
    {
        return $this->permissionType;
    }

    /**
     * @param string|null $permissionType
     * @return Permission
     */
    public function setPermissionType(?string $permissionType): Permission
    {
        $this->permissionType = $permissionType;
        return $this;
    }

}