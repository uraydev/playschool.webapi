<?php

use Illuminate\Database\Seeder;

class UserMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('users_meta')->delete();
        
        DB::collection('users_meta')->insert(
            ['user__id' => 1000, 'key' => 'age', 'value' => 30]
        );
        DB::collection('users_meta')->insert(
            ['user__id' => 1000, 'key' => 'gender', 'value' => 1]
        );
        DB::collection('users_meta')->insert(
            ['user__id' => 1001, 'key' => 'age', 'value' => 33]
        );   
    }
}
