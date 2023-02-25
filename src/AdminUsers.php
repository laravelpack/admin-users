<?php

namespace LaravelPack\AdminUsers;

use Encore\Admin\Extension;

class AdminUsers extends Extension
{
    public $name = 'admin-users';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Adminusers',
        'path'  => 'admin-users',
        'icon'  => 'fa-gears',
    ];
}