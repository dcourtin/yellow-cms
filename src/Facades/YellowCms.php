<?php

namespace Dcourtin\YellowCms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dcourtin\YellowCms\YellowCms
 */
class YellowCms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yellow-cms';
    }
}
