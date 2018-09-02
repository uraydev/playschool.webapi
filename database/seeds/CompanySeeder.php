<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('companies')->delete();

        DB::collection('companies')->insert(['uid' => '1000', 'name' => 'Company 1 test', 'users' => [], 'demands' => [
            0 => [
                '_id' => new MongoDB\BSON\ObjectId(),
                'name' => 'Demand Test #1',
                'description' => 'Demand Test #1 description'
            ]
        ]]);
        DB::collection('companies')->insert(['uid' => '1001', 'name' => 'Company 2 test', 'users' => [], 'demands' => []]);
        DB::collection('companies')->insert(['uid' => '1002', 'name' => 'Company 3 test', 'users' => [], 'demands' => []]);
    }
}
