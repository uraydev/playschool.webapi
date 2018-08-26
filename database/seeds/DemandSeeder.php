<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DemandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('demands')->delete();

        DB::collection('demands')->insert([
            'name' => 'Demand Name 1',
            'description' => 'Demand description 1',
            'author_id'=> 1000,
            'responsible_id'=> 1000,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
        DB::collection('demands')->insert([
            'name' => 'Demand Name 2',
            'description' => 'Demand description 2',
            'author_id'=> 1000,
            'responsible_id'=> 1001,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]);
    }
}
