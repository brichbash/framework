<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
use function PHPStan\Testing\assertType;

/** @var ModelNotFoundException<User> $exception */
$exception = new ModelNotFoundException();

$exception->setModel(User::class, 1);
$exception->setModel(User::class, [1]);
$exception->setModel(User::class, '1');
$exception->setModel(User::class, ['1']);
