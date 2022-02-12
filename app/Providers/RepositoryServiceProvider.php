<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RoomRepository;
use App\Repositories\CachingRoomRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RoomRepository::class, function($app){
            return new CachingRoomRepository();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
