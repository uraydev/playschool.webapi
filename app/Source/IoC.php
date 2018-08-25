<?php namespace App\Source;

use Illuminate\Support\ServiceProvider;

class IoCServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Source\DAL\Interfaces\Services\IPositionService', 'App\Source\DAL\Services\PositionService');
        $this->app->bind('App\Source\DAL\Interfaces\Services\IUserMetaService', 'App\Source\DAL\Services\UserMetaService');
        $this->app->bind('App\Source\DAL\Interfaces\Services\IUserService', 'App\Source\DAL\Services\UserService');
    }
}