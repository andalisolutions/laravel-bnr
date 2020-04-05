<?php

namespace Andali\Bnr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string exchange(string $currency = 'EUR', $date = NULL)
 */
class Bnr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bnr';
    }
}
