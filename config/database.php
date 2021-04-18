<?php

/**
 * Database configurations
 * TODO: implement this later
 *
 */

 return [
    'connections' => [
        'mssql' => [
            'driver'    => 'sqlsrv',
            'host'      => env('DB_HOST', '127.0.0.1'),
            'database'  => env('DB_DATABASE', 'AccountDB'),
            'username'  => env('DB_USERNAME', 'dbuser'),
            'password'  => env('DB_PASSWORD', 'dbpass'),
        ]
    ]
];
