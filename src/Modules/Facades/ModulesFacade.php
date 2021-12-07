<?php

namespace Studio3S\Modules\Facades;

use Illuminate\Support\Facades\Facade;

class ModulesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'studio3s_modules';
    }
}