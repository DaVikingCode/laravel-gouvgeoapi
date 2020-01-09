<?php

namespace DaVikingCode\LaravelGouvGeoApi\Facades;

use Illuminate\Support\Facades\Facade;

class GouvGeoApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gouvgeoapi';
    }
}
