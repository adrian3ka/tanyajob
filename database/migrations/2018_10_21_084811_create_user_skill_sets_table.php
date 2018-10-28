<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skill_sets', function (Blueprint $table) {			
			$table->integer('user_id')->unsigned();
			$table->integer('skill_set_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')
				->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('skill_set_id')->references('id')->on('master_skill_sets')
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
        Schema::dropIfExists('user_skill_sets');
    }
}
