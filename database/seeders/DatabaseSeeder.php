<?php

namespace Database\Seeders;

use App\Models\Bien;
use App\Models\Configuration;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(AgenceSeeder::class);
        User::factory(20)->create();
        Bien::factory(20)->create();
        $this->call(TypeConfigurationSeeder::class);
        Configuration::factory(200)->create();

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);


        // User::find(2)->roles()->attach(2);
        // User::find(2)->roles()->attach(1);
        // User::find(2)->roles()->attach(3);
        // User::find(1)->roles()->attach(1);
        // User::find(3)->roles()->attach(2);


        // User::find(2)->biens()->attach(2);
        // User::find(2)->biens()->attach(1);
        // User::find(2)->biens()->attach(3);
        // User::find(1)->biens()->attach(1);
        // User::find(3)->biens()->attach(2);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
