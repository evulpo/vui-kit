<?php

namespace Evulpo\VuiKit\Facades;

use Illuminate\Support\Facades\Facade;

class Vui extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vui';
    }
}