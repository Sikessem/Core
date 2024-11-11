<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsBool;
use Sikessem\Types\BoolType;

class BoolObject implements BoolType
{
    use AsBool;

    public function __construct(protected bool $value) {}

    public function get(): bool
    {
        return $this->value;
    }
}
