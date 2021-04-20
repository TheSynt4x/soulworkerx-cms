<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');

        \DB::listen(function ($query) {
            $querySql = str_replace(['?'], ['\'%s\''], $query->sql);
            $queryRawSql = vsprintf($querySql, $query->bindings);
            \Log::debug(
                '[SQL EXEC]',
                [
                    "raw sql"  => $queryRawSql,
                    "time" => $query->time,
                ]
            );
        });
    }
}
