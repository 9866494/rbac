<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

abstract class ArrayPermission extends Permission
{
    protected $scope = [];

    /**
     * @return array
     */
    public function getScope()
    {
        return parent::getScope();
    }

    /**
     * @param array $scope
     * @return ArrayPermission
     */
    public function setScope($scope)
    {
        return parent::setScope($scope);
    }


}