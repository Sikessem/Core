<?php

namespace Sikessem\Exception;

final class UnableToCall extends \BadFunctionCallException implements IsException
{
    use HasExceptionConstructor;
}
