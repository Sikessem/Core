<?php

namespace Sikessem\Exception;

final class NotFound extends \InvalidArgumentException implements IsNotFound
{
    use HasExceptionConstructor;
}
