<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('eeid'); 
            $table->char('full_name');
            $table->char('job_title');
            $table->char('department');
            $table->char('business_unit');
            $table->char('gender');
            $table->char('ethnicity');
            $table->integer('age'); 
            $table->dateTime('hire_date'); 	
            $table->decimal('anual_salary', 5, 2); 	
            $table->string('bonus');
            $table->char('country');
            $table->char('city');
            $table->dateTime('exit_date'); 		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload');
    }
};
