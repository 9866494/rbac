<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class User
 * @package Awful85\Rbac\Document
 * @ODM\Document(collection="user", repositoryClass="\Awful85\Rbac\Repository\UserRepository")
 */
class User
{
    /**
     * @var string|null
     * @ODM\Id
     */
    private $id;

    /**
     * @var bool
     * @ODM\Field(type="bool")
     */
    private $locked = false;

    /**
     * @var bool
     * @ODM\Field(type="bool")
     */
    private $adminLocked = false;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $displayName = null;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $firstName = null;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $lastName = null;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $patronymic = null;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $avatarUri = null;

    /**
     * @var \DateTime|null
     * @ODM\Field(type="date")
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     * @ODM\Field(type="date")
     */
    private $updatedAt;

    /**
     * @var string|null
     * @ODM\Field(type="string")
     */
    private $timeZone = "Europe/Moscow";
}