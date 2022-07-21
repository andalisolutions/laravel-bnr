<?php

namespace Andali\Bnr\Tests;

use Andali\Bnr\BnrServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            BnrServiceProvider::class,
        ];
    }
}
