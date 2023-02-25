<?php

namespace LaravelPack\AdminUsers;

use Illuminate\Support\ServiceProvider;

class AdminUsersServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(\Encore\Admin\Controllers\UserController::class, \LaravelPack\AdminUsers\Http\Controllers\UserController::class);
        $this->app->bind(\Encore\Admin\Auth\Database\Administrator::class, \LaravelPack\AdminUsers\Models\Administrator::class);
    }

    /**
     * {@inheritdoc}
     */
    public function boot(AdminUsers $extension)
    {
        if (! AdminUsers::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'admin-users');
        }

        if ($this->app->runningInConsole()) {

            if ($assets = $extension->assets()) {
                $this->publishes(
                    [$assets => public_path('vendor/laravelpack/admin-users')],
                    'admin-users'
                );
            }

            $this->publishes([__DIR__ . '/../database/migrations' => database_path('migrations')], 'admin-users-migrations');
            $this->publishes([__DIR__ . '/../database/seeds' => database_path('seeders')], 'admin-users-seeder');
        }

        $this->app->booted(function () {
            AdminUsers::routes(__DIR__.'/../routes/web.php');
        });

    }
}