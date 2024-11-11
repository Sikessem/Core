<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsFloat;
use Sikessem\Types\FloatType;

class FloatObject implements FloatType
{
    use AsFloat;

    public function __construct(protected float $value) {}

    public function get(): float
    {
        return $this->value;
    }
}
