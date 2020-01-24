<?php

declare(strict_types=1);

namespace Assessment;

trait Result
{
    public function toJson(): string
    {
        return json_encode($this->_result, JSON_PRETTY_PRINT);
    }

    public function toArray(): array
    {
        return $this->_result;
    }

    public function implode(string $delimiter): string
    {
        return implode($delimiter, array_values($this->_result));
    }

    public function count(): int
    {
        return count($this->_result);
    }
}
