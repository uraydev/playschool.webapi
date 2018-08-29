<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('UserMetaSeeder');
        $this->call('PositionSeeder');
        $this->call('DemandSeeder');
        $this->call('RoleSeeder');
        $this->call('UserRoleSeeder');
        $this->call('ChildSeeder');

        // $this->call(UsersTableSeeder::class);
    }
}
