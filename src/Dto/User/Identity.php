<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto\User;

class Identity
{
    const TYPE_EMAIL = 1;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var bool|null
     */
    private $locked;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var null
     */
    private $verificationCode = null;
}