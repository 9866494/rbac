<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto\User;

class EmailIdentity extends Identity
{
    /**
     * EmailIdentity constructor.
     */
    public function __construct()
    {
        $this->type = self::TYPE_EMAIL;
    }
}