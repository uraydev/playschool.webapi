<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('users')->delete();
        
        DB::collection('users')->insert(
            [
                '_id' => 1000,
                'surname' => 'Иванов', 
                'name' => 'Иванов', 
                'partonymic' => 'Иванович'
            ]
        );
        DB::collection('users')->insert(
            [
                '_id' => 1001,
                'surname' => 'Петров', 
                'name' => 'Петр', 
                'partonymic' => 'Петрович'
            ]
        );

    }
}
