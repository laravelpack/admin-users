<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use LaravelPack\AdminUsers\Models\Administrator;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a user.
        Administrator::truncate();
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name'     => 'Administrator',
            'email'    => 'admin@local.laravel-app.com'
        ]);
    }
}
