<?php

namespace LaravelPack\AdminUsers;

use Encore\Admin\Extension;

class AdminUsers extends Extension
{
    public $name = 'admin-users';

    public $views = dirname(__DIR__) . '/resources/views';

    public $assets = dirname(__DIR__) . '/resources/assets';

}