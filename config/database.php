<?php

/**
 * Database configurations
 */

return [
    'connections' => [
        'accounts' => [
            'driver'    => 'sqlsrv',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE', 'AccountDB'),
            'username'  => env('DB_USERNAME', 'dbuser'),
            'password'  => env('DB_PASSWORD', 'dbpass'),
        ],

        'common' => [
            'driver'    => 'sqlsrv',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE', 'CommonDB'),
            'username'  => env('DB_USERNAME', 'dbuser'),
            'password'  => env('DB_PASSWORD', 'dbpass'),
        ],
    ]
];
