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

        DB::collection('user_roles')->insert(['user_id' => 999, 'role_id' => 1000]);
        DB::collection('user_roles')->insert(['user_id' => 1000, 'role_id' => 1001]);

    }
}
