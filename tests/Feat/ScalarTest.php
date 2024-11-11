<?php

declare(strict_types=1);

use Sikessem\Cast;
use Sikessem\Objects\ScalarObject;
use Sikessem\Types\MixedType;
use Sikessem\Types\ScalarType;

beforeEach(function () {
    $this->scalar = Cast::toScalar('Hello World');
});

it('should be instantiable', function () {
    expect($this->scalar)->toBeInstanceOf(ScalarObject::class);
});

it('should be an instance of ScalarType', function () {
    expect($this->scalar)->toBeInstanceOf(ScalarType::class);
});

it('should be an instance of MixedType', function () {
    expect($this->scalar)->toBeInstanceOf(MixedType::class);
});

it('should return the value', function () {
    expect($this->scalar->get())->toBe('Hello World');
});
