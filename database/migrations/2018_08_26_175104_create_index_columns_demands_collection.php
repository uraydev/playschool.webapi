<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexColumnsDemandsCollection extends Migration
{
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->table('demands', function (Blueprint $collection) {
            $collection->index('name');
            $collection->index('description');
            $collection->index('author_id');
            $collection->index('responsible_id');
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
        Schema::connection($this->connection)->table('demands', function (Blueprint $collection) {
            $collection->drop();
        });
    }
}
