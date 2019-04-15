<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserSavedLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_saved_link', function (Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->string('link');
			$table->unique(['user_id', 'link']);
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('cascade')->onUpdate('cascade');
			$table->index('link');
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
        //
        Schema::dropIfExists('user_saved_link');
    }
}
