<?php

namespace Mutane\VueTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mutane\VueTable\VueTable
 */
class VueTable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mutane\VueTable\VueTable::class;
    }
}
