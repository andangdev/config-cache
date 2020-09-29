<?php

namespace Ugiw\ConfigCache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see Ugiw\ConfigCache\ConfigCache
 */
class ConfigCache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lumen-config-cache';
    }
}
