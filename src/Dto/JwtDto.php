<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto;

class JwtDto
{
    /**
     * @var string|null
     */
    protected $accessToken = null;

    /**
     * @var string|null
     */
    protected $refreshToken;

    /**
     * @var string|null
     */
    protected $fingerPrint;
}