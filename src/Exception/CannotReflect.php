<?php

namespace Sikessem\Exception;

final class CannotReflect extends \ReflectionException implements IsException
{
    use HasExceptionConstructor;
}
