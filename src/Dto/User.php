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
    protected $id;

    /**
     * @var bool
     */
    protected $locked = false;

    /**
     * @var bool
     */
    protected $adminLocked = false;

    /**
     * @var string|null
     */
    protected $displayName = null;

    /**
     * @var string|null
     */
    protected $firstName = null;

    /**
     * @var string|null
     */
    protected $lastName = null;

    /**
     * @var string|null
     */
    protected $patronymic = null;

    /**
     * @var string|null
     */
    protected $avatarUri = null;

    /**
     * @var \DateTime|null
     */
    protected $createdAt;

    /**
     * @var \DateTime|null
     */
    protected $updatedAt;

    /**
     * @var string|null
     */
    protected $timeZone = "Europe/Moscow";

    /**
     * @var Identity[]
     */
    protected $identity = [];

    /**
     * @var UserRelatedData[]
     */
    protected $userRelatedData = [];

    /**
     * @var UserInnerData[]
     */
    protected $userInnerData = [];

}