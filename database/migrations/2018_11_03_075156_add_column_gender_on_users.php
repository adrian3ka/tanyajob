<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnGenderOnUsers extends Migration
{
    public function up()
    {        
		Schema::table('users', function (Blueprint $table) {
            $table->boolean('gender')->nullable();
        });
    }
    
    public function down()
    {      
		Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
}
