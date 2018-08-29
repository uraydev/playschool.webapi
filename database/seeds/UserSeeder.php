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
                '_id' => new MongoDB\BSON\ObjectId('000000000000000000000001'),
                'surname' => 'Иванов', 
                'name' => 'Иванов', 
                'middlename' => 'Иванович',
                'email' => 'test1@test.ru',
                'password' => \Illuminate\Support\Facades\Hash::make("123"),
                'is_verified' => 0,
                'remember_token' => null,
                'confirm_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
        DB::collection('users')->insert(
            [
                '_id' => new MongoDB\BSON\ObjectId('000000000000000000000002'),
                'surname' => 'Петров', 
                'name' => 'Петр', 
                'middlename' => 'Петрович',
                'email' => 'test2@test.ru',
                'password' => \Illuminate\Support\Facades\Hash::make("123"),
                'is_verified' => 0,
                'remember_token' => null,
                'confirm_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );
        DB::collection('users')->insert(
            [
                '_id' => new MongoDB\BSON\ObjectId('000000000000000000000003'),
                'surname' => 'Юсупов',
                'name' => 'Замир',
                'middlename' => 'Алмасович',
                'email' => 'jusupovz@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make("123"),
                'is_verified' => 1,
                'remember_token' => null,
                'confirm_token' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        );

    }
}
