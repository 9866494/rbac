<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto;

abstract class AbstractList extends AbstractDto
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @var int
     */
    protected $before = 0;

    /**
     * @var int
     */
    protected $current = 1;

    /**
     * @var int
     */
    protected $last = 1;

    /**
     * @var int
     */
    protected $next = 1;

    /**
     * @var int
     */
    protected $totalPages = 1;

    /**
     * @var int
     */
    protected $totalItems = 1;

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return AbstractList
     */
    public function setItems(array $items): AbstractList
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return int
     */
    public function getBefore(): int
    {
        return $this->before;
    }

    /**
     * @param int $before
     * @return AbstractList
     */
    public function setBefore(int $before): AbstractList
    {
        $this->before = $before;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return AbstractList
     */
    public function setCurrent(int $current): AbstractList
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return int
     */
    public function getLast(): int
    {
        return $this->last;
    }

    /**
     * @param int $last
     * @return AbstractList
     */
    public function setLast(int $last): AbstractList
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return int
     */
    public function getNext(): int
    {
        return $this->next;
    }

    /**
     * @param int $next
     * @return AbstractList
     */
    public function setNext(int $next): AbstractList
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return AbstractList
     */
    public function setTotalPages(int $totalPages): AbstractList
    {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    /**
     * @param int $totalItems
     * @return AbstractList
     */
    public function setTotalItems(int $totalItems): AbstractList
    {
        $this->totalItems = $totalItems;
        return $this;
    }
}