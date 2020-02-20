<?php
declare(strict_types=1);

namespace Awful85\Rbac\Validation\AbstractValidator;

use Awful85\Rbac\ContainerInjectableInterface;
use Awful85\Rbac\ContainerInterface;
use Awful85\Rbac\Validation\Permission\SaveValidator;

class Violation
{
    /**
     * @var string
     */
    private $field;
    /**
     * @var string
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var mixed
     */
    private $value;

    /**
     * Violation constructor.
     * @param string $field
     * @param string $code
     * @param string|null $message
     * @param null $value
     */
    public function __construct(string $field, string $code, string $message = null, $value = null)
    {
        $this->field = $field;
        $this->code = $code;
        $this->message = $message;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $field
     * @return Violation
     */
    public function setField(string $field): Violation
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Violation
     */
    public function setCode(string $code): Violation
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return Violation
     */
    public function setMessage(?string $message): Violation
    {
        $this->message = $message;
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
     * @return Violation
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}