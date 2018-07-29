<?php

namespace Emotality\TawkTo\Facades;

use Illuminate\Support\Facades\Facade;

class TawkTo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Emotality\TawkTo\TawkTo::class;
    }
}