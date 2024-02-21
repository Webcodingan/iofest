<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::create([
            'role_name' => 'masteradmin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        User::factory(2)->create();
    }
}
