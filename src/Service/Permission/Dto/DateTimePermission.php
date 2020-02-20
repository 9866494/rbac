<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

class DateTimePermission extends ScalarPermission
{
    /**
     * @return \DateTime
     */
    public function getScope()
    {
        return parent::getScope();
    }

    /**
     * @param \DateTime $scope
     * @return DateTimePermission
     */
    public function setScope($scope)
    {
        return parent::setScope($scope);
    }
}