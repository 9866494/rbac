<?php
declare(strict_types=1);

namespace Awful85\Rbac\Dto;

abstract class AbstractDto implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return $this->getDtoDataAsArray() ?? [];
    }

    public function toStdClass(): \stdClass
    {
        return json_decode(json_encode($this->jsonSerialize()), false);
    }

    private function getDtoDataAsArray()
    {
        $result = [];

        foreach ($this as $k => $v) {
            $result[$k] = $v;
        }

        return $result;
    }
}