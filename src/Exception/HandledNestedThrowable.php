<?php
declare(strict_types=1);

namespace Awful85\Rbac\Exception;

class HandledNestedThrowable extends AbstractException
{
    /**
     * @var \Throwable
     */
    private $nestedThrowable;

    /**
     * @return \Throwable
     */
    public function getNestedThrowable(): \Throwable
    {
        return $this->nestedThrowable;
    }

    /**
     * @param \Throwable $nestedThrowable
     * @return HandledNestedThrowable
     */
    public function setNestedThrowable(\Throwable $nestedThrowable): HandledNestedThrowable
    {
        $this->nestedThrowable = $nestedThrowable;
        return $this;
    }

}