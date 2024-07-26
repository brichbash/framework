<?php

use Illuminate\Support\Timebox;
use function PHPStan\Testing\assertType;

assertType('int', (new Timebox)->call(function ($timebox) {

    return 1;
}, 1));
