<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexColumnsUsersCollection extends Migration
{
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->table('users', function (Blueprint $collection) {
            $collection->index('id');
            $collection->index('surname');
            $collection->index('name');
            $collection->index('middlename');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->table('users', function (Blueprint $collection) {
            $collection->drop();
        });
    }
}
