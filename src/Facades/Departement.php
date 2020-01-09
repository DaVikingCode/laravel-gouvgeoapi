<?php

namespace DaVikingCode\LaravelGouvGeoApi\Facades;

use Illuminate\Support\Facades\Facade;

class Departement extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'departement';
    }
}
