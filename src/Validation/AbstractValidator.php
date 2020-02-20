<?php
declare(strict_types=1);

namespace Awful85\Rbac\Validation;

use Awful85\Rbac\ContainerInjectableInterface;
use Awful85\Rbac\ContainerInterface;
use Awful85\Rbac\Exception\ValidationException;
use Awful85\Rbac\Validation\AbstractValidator\Violation;
use Awful85\Rbac\Validation\Permission\SaveValidator;

abstract class AbstractValidator
{
    /**
     * @var Factory
     */
    private $factory;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var Violation[]
     */
    private $violations = [];

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param $data
     * @return Violation[]
     */
    public abstract function vaildate($data): array;

    public function validateOrThrow($data): void
    {
        $violations = $this->vaildate($data);

        if (!$this->isValid()) {
            throw new ValidationException(static::class, $violations);
        }
    }

    public function reset(): self
    {
        $this->violations = [];
        return $this;
    }

    protected function addViolation(string $field, string $code, string $message = null, $value = null): self
    {
        $this->violations[] = new Violation($field, $code, $message, $value);

        return $this;
    }

    /**
     * @return Factory
     */
    public function getFactory(): Factory
    {
        return $this->factory;
    }

    /**
     * @return Violation[]
     */
    public function getViolations(): array
    {
        return $this->violations;
    }

    public function isValid(): bool
    {
        return count($this->violations) === 0;
    }

}