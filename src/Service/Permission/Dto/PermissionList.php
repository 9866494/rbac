<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\Permission\Dto;

use Awful85\Rbac\Dto\AbstractList;

class PermissionList extends AbstractList
{
    /**
     * @return Permission[]
     */
    public function getItems(): array
    {
        return parent::getItems();
    }

    /**
     * @param Permission[] $items
     * @return PermissionList
     */
    public function setItems(array $items): AbstractList
    {
        return parent::setItems($items);
    }
}