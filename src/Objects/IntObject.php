<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsInt;
use Sikessem\Types\IntType;

class IntObject implements IntType
{
    use AsInt;

    public function __construct(protected int $value) {}

    public function get(): int
    {
        return $this->value;
    }
}
