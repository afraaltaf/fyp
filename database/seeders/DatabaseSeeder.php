<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Role::create(['name'=>'tutor']);
    	Role::create(['name'=>'admin']);
    	Role::create(['name'=>'parent']);
       
    // \App\Models\User::factory(10)->create();
    }
}
