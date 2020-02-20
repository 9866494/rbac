<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

class FloatPermission extends ScalarPermission
{
    /**
     * @return float
     */
    public function getScope()
    {
        return parent::getScope();
    }

    /**
     * @param float $scope
     * @return FloatPermission
     */
    public function setScope($scope)
    {
        return parent::setScope($scope);
    }

}