<?php

namespace Emotality\TawkTo;

use Illuminate\Support\Facades\Facade;

class TawkTo extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \Emotality\TawkTo\TawkToAPI::class;
    }
}
