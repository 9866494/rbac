<?php
declare(strict_types=1);

namespace Awful85\Rbac\Document;

/**
 * Class ScalarPermission
 * @package Awful85\Rbac\Document
 */
abstract class ArrayPermission extends Permission
{
    const COMBINE_MERGE = 'COMBINE_MERGE';
    const COMBINE_INTERSECT = 'COMBINE_INTERSECT';

    public function __construct()
    {
        $this->setCombiningRule(self::COMBINE_PREFER_DEFAULT);
    }
}
