<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('positions')->delete();

        DB::collection('positions')->insert(['_id' => 1000, 'name' => 'teacher', 'description' => 'Воспитатель', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('positions')->insert(['_id' => 1001, 'name' => 'doctor', 'description' => 'Медицинский работник', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('positions')->insert(['_id' => 1002, 'name' => 'supplier', 'description' => 'МТО', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('positions')->insert(['_id' => 1003, 'name' => 'clerk', 'description' => 'Делопроизводитель', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('positions')->insert(['_id' => 1004, 'name' => 'administrator', 'description' => 'Управляющий', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);

    }
}
