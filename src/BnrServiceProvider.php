<?php

namespace Andali\Bnr;

use Illuminate\Support\ServiceProvider;

class BnrServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('bnr', fn ($app) => new Bnr);
    }
}
