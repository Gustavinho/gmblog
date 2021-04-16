<?php

namespace Gmblog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GmGmblog\Gmblog
 */
class GmblogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gmblog';
    }
}
