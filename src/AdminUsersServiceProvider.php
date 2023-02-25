<?php

namespace LaravelPack\AdminUsers;

use Illuminate\Support\ServiceProvider;

class AdminUsersServiceProvider extends ServiceProvider
{
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

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravelpack/admin-users')],
                'admin-users'
            );
        }

        $this->app->booted(function () {
            AdminUsers::routes(__DIR__.'/../routes/web.php');
        });
    }
}