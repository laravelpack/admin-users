<?php

use LaravelPack\AdminUsers\Http\Controllers\AdminUsersController;

Route::get('admin-users', AdminUsersController::class.'@index');