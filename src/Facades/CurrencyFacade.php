<?php

namespace Kaiwh\Currency\Facades;

use Illuminate\Support\Facades\Facade;

class CurrencyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'kaiwh_laravel_currency';
    }
}
