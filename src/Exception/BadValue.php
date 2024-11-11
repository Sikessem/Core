<?php

namespace Sikessem\Exception;

final class BadValue extends \UnexpectedValueException implements IsException
{
    use HasExceptionConstructor;
}
