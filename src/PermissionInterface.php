<?php
declare(strict_types=1);

namespace Awful85\Rbac;


interface PermissionInterface
{

    const TYPE_BOOL = "bool";
    const TYPE_INTEGER = "int";
    const TYPE_DATE = "date";
    const TYPE_DATE_TIME = "datetime";
    const TYPE_TIME = "time";
    const TYPE_ENUM = "enum";
    const TYPE_FLOAT = "float";

    public function getUniqueCode(): string;

    public function getService(): ?string;

    public function getCode(): string;

    public function getCombiningRule(): string;

    public function getScope();

    public function getPermissionType(): string;
}