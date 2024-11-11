<?php

namespace Sikessem\Sample;

use Sikessem\Contracts\IsEncapsulated;

interface CustomInterface extends IsEncapsulated
{
    public function getName(): string;

    public function setName(string $name): static;
}
