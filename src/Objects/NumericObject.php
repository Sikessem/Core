<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsNumeric;
use Sikessem\Types\NumericType;

class NumericObject implements NumericType
{
    use AsNumeric;

    public function __construct(protected int|float|string $value) {}

    public function get(): int|float|string
    {
        return $this->value;
    }
}
