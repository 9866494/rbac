<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Awful85\Rbac\PermissionInterface;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Permission
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="permission", repositoryClass="\Awful85\Rbac\Repository\PermissionRepository")
 * @ODM\UniqueIndex(keys={"code"="asc", "service"="asc"})
 * @ODM\DiscriminatorField("permissionDocumentType")
 */
abstract class Permission implements PermissionInterface
{
    const SUPER_PERMISSION_CODE = 'Awful85_Rbac_Super_Permission_Code_6b896e49-f8af-40f9-ab96-013527ea20f0';

    const COMBINE_PREFER_DEFAULT = 'COMBINE_PREFER_DEFAULT';

    /**
     * @var string|null
     * @ODM\Id
     */
    private $id;

    /**
     * @var string
     * @ODM\Field(type="string", nullable=false)
     */
    private $code;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $service = null;


    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $name = null;

    /**
     * @var string
     */
    private $combiningRule;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $description = null;

    /**
     * @var string|null
     * @ODM\Field(type="object_id")
     */
    private $categoryId = null;

    /**
     * @var mixed
     * @ODM\Field(type="raw")
     */
    protected $scope = null;

    /**
     * @var string
     * @ODM\Field(type="string", nullable=false)
     */
    protected $permissionType;

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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Permission
     */
    public function setCode(string $code): Permission
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
     * @return string
     */
    public function getCombiningRule(): string
    {
        return $this->combiningRule;
    }

    /**
     * @param string $combiningRule
     * @return Permission
     */
    public function setCombiningRule(string $combiningRule): Permission
    {
        $this->combiningRule = $combiningRule;
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

    public function getUniqueCode(): string
    {
        return $this->getService() . '\\' . $this->getCode();
    }

    /**
     * @return string
     */
    public function getPermissionType(): string
    {
        return $this->permissionType;
    }

}