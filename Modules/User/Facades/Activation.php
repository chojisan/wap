<?php

namespace Modules\Auth\Facades;

use Illuminate\Support\Facades\Facade;

class Activation extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'activation';
    }
}
