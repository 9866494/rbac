<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto;

use Awful85\Rbac\Dto\User\Identity;
use Awful85\Rbac\Dto\User\UserInnerData;
use Awful85\Rbac\Dto\User\UserRelatedData;

class User
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool
     */
    private $locked = false;

    /**
     * @var bool
     */
    private $adminLocked = false;

    /**
     * @var string|null
     */
    private $displayName = null;

    /**
     * @var string|null
     */
    private $firstName = null;

    /**
     * @var string|null
     */
    private $lastName = null;

    /**
     * @var string|null
     */
    private $patronymic = null;

    /**
     * @var string|null
     */
    private $avatarUri = null;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $timeZone = "Europe/Moscow";

    /**
     * @var Identity[]
     */
    private $identity = [];

    /**
     * @var UserRelatedData[]
     */
    private $userRelatedData = [];

    /**
     * @var UserInnerData[]
     */
    private $userInnerData = [];

}