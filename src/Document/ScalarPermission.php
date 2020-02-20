<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

/**
 * Class ScalarPermission
 * @package Awful85\Rbac\Document
 */
abstract class ScalarPermission extends Permission
{
    const COMBINE_PREFER_MAX = 'COMBINE_PREFER_MAX';
    const COMBINE_PREFER_MIN = 'COMBINE_PREFER_MIN';

    public function __construct()
    {
        $this->setCombiningRule(self::COMBINE_PREFER_DEFAULT);
    }
}
