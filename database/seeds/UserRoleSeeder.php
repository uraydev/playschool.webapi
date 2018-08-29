<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('user_roles')->delete();

        DB::collection('user_roles')->insert(['user__id' => '000000000000000000000003', 'role__id' => 'f00000000000000000000001']);
        DB::collection('user_roles')->insert(['user__id' => '000000000000000000000003', 'role__id' => 'f00000000000000000000003']);
        DB::collection('user_roles')->insert(['user__id' => '000000000000000000000001', 'role__id' => 'f00000000000000000000002']);

    }
}
