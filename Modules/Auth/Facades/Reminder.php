<?php


namespace Modules\Auth\Facades;

use Illuminate\Support\Facades\Facade;

class Reminder extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'reminders';
    }
}
