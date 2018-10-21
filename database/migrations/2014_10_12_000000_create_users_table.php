<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('date_of_birth')->nullable();
            $table->integer('last_degree_id')->unsigned()->nullable();
            $table->integer('major_id')->unsigned()->nullable();
            $table->integer('expected_location_id')->unsigned()->nullable();
            $table->integer('expected_salary_lower')->nullable();
            $table->integer('expected_salary_upper')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('last_degree_id')->references('id')->on('master_degrees')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('master_majors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
