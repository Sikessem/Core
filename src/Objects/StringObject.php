<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsString;
use Sikessem\Types\StringType;

class StringObject implements StringType
{
    use AsString;

    public function __construct(protected string $value) {}

    public function get(): string
    {
        return $this->value;
    }
}
