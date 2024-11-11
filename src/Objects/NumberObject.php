<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsNumber;
use Sikessem\Types\NumberType;

class NumberObject implements NumberType
{
    use AsNumber;

    public function __construct(protected int|float $value) {}

    public function get(): int|float
    {
        return $this->value;
    }
}
