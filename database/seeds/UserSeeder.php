<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'partonymic' => 'Иванович',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
        DB::collection('users')->insert(
            [
                '_id' => 1001,
                'surname' => 'Петров', 
                'name' => 'Петр', 
                'partonymic' => 'Петрович',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

    }
}
