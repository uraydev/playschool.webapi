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
        DB::collection('roles')->insert(['_id'=>new MongoDB\BSON\ObjectId('f00000000000000000000001'), 'name' => 'sa', 'description' => 'Super administrator']);
        DB::collection('roles')->insert(['_id'=>new MongoDB\BSON\ObjectId('f00000000000000000000002'), 'name' => 'manager', 'description' => 'Manager']);
        DB::collection('roles')->insert(['_id'=>new MongoDB\BSON\ObjectId('f00000000000000000000003'), 'name' => 'teacher', 'description' => 'Teacher']);

    }
}
