<?php

namespace Gmblog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GmGmblog\Gmblog
 */
class Gmblog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gmblog';
    }
}
