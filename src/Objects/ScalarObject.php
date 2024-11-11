<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsScalar;
use Sikessem\Types\ScalarType;

class ScalarObject implements ScalarType
{
    use AsScalar;

    public function __construct(protected bool|int|float|string $value) {}

    public function get(): bool|int|float|string
    {
        return $this->value;
    }
}
