<?php

declare(strict_types=1);

namespace Sikessem\Types;

interface IntType extends NumberType
{
    public function __invoke(mixed $value = null): int;

    public function get(): int;
}
