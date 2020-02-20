<?php
declare(strict_types=1);

namespace Awful85\Rbac\Exception;

use Awful85\Rbac\Validation\AbstractValidator\Violation;

class ValidationException extends AbstractException
{
    /**
     * @var string
     */
    private $validatorClass;
    /**
     * @var Violation[]
     */
    private $violations = [];

    /**
     * ValidationException constructor.
     * @param string $validatorClass
     * @param Violation[] $violations
     */
    public function __construct(string $validatorClass, array $violations)
    {
        $this->validatorClass = $validatorClass;
        $this->violations = $violations;
        $this->message = 'Validation exception';
        $this->code = 400;
    }

    /**
     * @return string
     */
    public function getValidatorClass(): string
    {
        return $this->validatorClass;
    }

    /**
     * @param string $validatorClass
     * @return ValidationException
     */
    public function setValidatorClass(string $validatorClass): ValidationException
    {
        $this->validatorClass = $validatorClass;
        return $this;
    }

    /**
     * @return Violation[]
     */
    public function getViolations(): array
    {
        return $this->violations;
    }

    /**
     * @param Violation[] $violations
     * @return ValidationException
     */
    public function setViolations(array $violations): ValidationException
    {
        $this->violations = $violations;
        return $this;
    }
}