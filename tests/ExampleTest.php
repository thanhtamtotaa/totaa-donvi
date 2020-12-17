<?php

namespace Totaa\TotaaDonvi\Tests;

use Orchestra\Testbench\TestCase;
use Totaa\TotaaDonvi\TotaaDonviServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TotaaDonviServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
