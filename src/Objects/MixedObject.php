<?php

declare(strict_types=1);

namespace Sikessem\Objects;

use Sikessem\Concerns\AsMixed;
use Sikessem\Types\MixedType;

class MixedObject implements MixedType
{
    use AsMixed;

    public function __construct(protected mixed $value) {}

    public function get(): mixed
    {
        return $this->value;
    }
}
