<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto\Identity;

abstract class AbstractKeyValueData
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * AbstractKeyValueData constructor.
     * @param string $key
     * @param mixed $value
     */
    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return AbstractKeyValueData
     */
    public function setKey(string $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return AbstractKeyValueData
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}