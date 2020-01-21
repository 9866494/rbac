<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service;

use Awful85\Rbac\Dto\JwtDto;
use Awful85\Rbac\Dto\User;
use Awful85\Rbac\Dto\User as UserDto;

class Auth extends BaseService
{
    public function register(UserDto $userDto): UserDto
    {
        return $userDto;
    }

    public function authorise(UserDto\Identity $identityDto): JwtDto
    {
        return new JwtDto();
    }

    public function requestPasswordReset(UserDto\Identity $identityDto): UserDto\Identity
    {
        return $identityDto;
    }

    public function resetPassword(string $verificationCode): UserDto
    {

    }

    public function addUserIdentity(JwtDto $jwtDto, UserDto\Identity $identityDto): UserDto
    {

    }

    public function removeIdentity(JwtDto $jwtDto, UserDto\Identity $identityDto): UserDto
    {

    }

    public function lockIdentity(JwtDto $jwtDto, UserDto\Identity $identityDto): UserDto
    {

    }

    public function unlockIdentity(JwtDto $jwtDto, UserDto\Identity $identityDto): UserDto
    {

    }
}