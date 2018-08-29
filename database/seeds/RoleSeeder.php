<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('roles')->delete();

        DB::collection('roles')->insert(['_id'=>1000, 'name' => 'sa', 'description' => 'Super administrator']);
        DB::collection('roles')->insert(['_id'=>1001, 'name' => 'manager', 'description' => 'Manager']);
        DB::collection('roles')->insert(['_id'=>1002, 'name' => 'teacher', 'description' => 'Teacher']);

    }
}
