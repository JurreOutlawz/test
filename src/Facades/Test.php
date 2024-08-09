<?php

namespace JurreOutlawz\Test\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JurreOutlawz\Test\Test
 */
class Test extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JurreOutlawz\Test\Test::class;
    }
}
