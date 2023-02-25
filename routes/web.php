<?php

use Illuminate\Routing\Router;
//use LaravelPack\AdminUsers\Http\Controllers\AdminUsersController;

Route::group([
    'prefix'        => 'admin-users',
    'namespace'     => 'LaravelPack\\AdminUsers\\Http\\Controllers',
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', AdminUsersController::class.'@index')->name('admin-users.home');

});