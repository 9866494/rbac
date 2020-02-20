<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document\EnumPermission;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class EnumItem
 * @package Ez\Common\Document
 * @ODM\EmbeddedDocument
 */
class EnumItem
{
    /**
     * @var string
     * @ODM\Field(type="string")
     */
    private $id;

    /**
     * @var string
     * @ODM\Field(type="string")
     */
    private $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return EnumItem
     */
    public function setId(string $id): EnumItem
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return EnumItem
     */
    public function setName(string $name): EnumItem
    {
        $this->name = $name;
        return $this;
    }
}
