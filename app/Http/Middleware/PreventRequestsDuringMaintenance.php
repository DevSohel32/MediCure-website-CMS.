<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array
     */
    protected $except = [
        'admin/*',        // allow any admin route
        'admin',          // allow admin index
    ];
}
