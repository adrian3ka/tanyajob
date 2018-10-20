<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('company_name');
            $table->integer('industry_id')->unsigned();
            $table->integer('job_position');
            $table->integer('job_level_id');
            $table->integer('salary_lower');
            $table->integer('salary_upper');
            $table->integer('location_id');
            $table->timestamp('started_work_at');
            $table->timestamp('ended_work_at')->nullable();
            $table->timestamps();
            
            
            $table->foreign('industry_id')->references('id')->on('master_industries')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_experiences');
    }
}
