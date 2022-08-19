<?php

namespace Andali\Bnr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andali\Bnr\Bnr
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
        return \Andali\Bnr\Bnr::class;
    }
}
