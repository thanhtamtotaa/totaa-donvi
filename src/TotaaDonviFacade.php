<?php

namespace Totaa\TotaaDonvi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Totaa\TotaaDonvi\Skeleton\SkeletonClass
 */
class TotaaDonviFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'totaa-donvi';
    }
}
