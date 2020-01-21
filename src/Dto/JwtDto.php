<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto;

class JwtDto
{
    /**
     * @var string|null
     */
    private $accessToken = null;

    /**
     * @var string|null
     */
    private $refreshToken;

    /**
     * @var string|null
     */
    private $fingerPrint;
}