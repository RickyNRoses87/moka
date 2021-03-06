<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Users Administration Package Configuration
    |--------------------------------------------------------------------------
    |
    | //
    |
    */

    'url_prefix' => env('ADMIN_PANEL_URL_PREFIX', '/admin/users'),

    'routes' => [
        'prefix' => env('ADMIN_PANEL_URL_PREFIX', '/admin/users'),
        'middleware' => ['web', 'auth', ], // definition not valid on 5.5
        'as' => 'admin.users',
        'namespace' => 'Admin\Http\Controllers',
    ],
];
