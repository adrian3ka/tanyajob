<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterWorkExperiencesTableToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->string('company_name')->nullable()->change();
            $table->integer('industry_id')->unsigned()->nullable()->change();
            $table->integer('field_id')->unsigned()->nullable()->change();
            $table->string('job_position')->nullable()->change();
            $table->integer('job_level_id')->unsigned()->nullable()->change();
            $table->bigInteger('salary_lower')->nullable()->change();
            $table->bigInteger('salary_upper')->nullable()->change();
            $table->integer('location_id')->unsigned()->nullable()->change();
            $table->datetime('started_work_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->string('company_name')->change();
            $table->integer('industry_id')->unsigned()->change();
            $table->integer('field_id')->unsigned()->change();
            $table->string('job_position')->change();
            $table->integer('job_level_id')->unsigned()->change();
            $table->bigInteger('salary_lower')->change();
            $table->bigInteger('salary_upper')->change();
            $table->integer('location_id')->unsigned()->change();
            $table->datetime('started_work_at')->change();
        });
    }
}
