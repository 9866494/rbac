<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

class IntegerPermission extends ScalarPermission
{
    /**
     * @return int
     */
    public function getScope()
    {
        return parent::getScope();
    }

    /**
     * @param int $scope
     * @return IntegerPermission
     */
    public function setScope($scope)
    {
        return parent::setScope($scope);
    }

}