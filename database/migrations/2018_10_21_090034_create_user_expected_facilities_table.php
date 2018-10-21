<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExpectedFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_expected_facilities', function (Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->integer('facility_id')->unsigned();
			$table->unique(['user_id', 'facility_id']);
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('facility_id')->references('id')->on('master_facilities')
				->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_expected_facilities');
    }
}
