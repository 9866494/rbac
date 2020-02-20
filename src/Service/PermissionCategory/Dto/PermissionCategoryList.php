<?php
declare(strict_types=1);

namespace Awful85\Rbac\Service\PermissionCategory\Dto;

use Awful85\Rbac\Dto\AbstractList;

class PermissionCategoryList extends AbstractList
{
    /**
     * @return PermissionCategory[]
     */
    public function getItems(): array
    {
        return parent::getItems();
    }

    /**
     * @param PermissionCategory[] $items
     * @return PermissionCategoryList
     */
    public function setItems(array $items): AbstractList
    {
        return parent::setItems($items);
    }

}