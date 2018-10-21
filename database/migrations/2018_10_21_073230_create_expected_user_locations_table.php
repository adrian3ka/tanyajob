<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpectedUserLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_expected_locations', function (Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->unique(['user_id', 'location_id']);
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('location_id')->references('id')->on('master_locations')
				->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expected_user_locations');
    }
}
