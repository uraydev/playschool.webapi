<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        
//        DB::collection('users_meta')->insert(['user__id' => 1000, 'key' => 'email', 'value' => 'test@test.ru', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1000, 'key' => 'phone', 'value' => '+79222222222', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1000, 'key' => 'dob', 'value' => '1990-01-01', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1000, 'key' => 'number', 'value' => '100', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

//        DB::collection('users_meta')->insert(['user__id' => 1001, 'key' => 'email', 'value' => 'qwe@qwe.ru', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1001, 'key' => 'phone', 'value' => '+7933333333', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1001, 'key' => 'dob', 'value' => '1970-06-01', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('users_meta')->insert(['user__id' => 1001, 'key' => 'number', 'value' => '101', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
