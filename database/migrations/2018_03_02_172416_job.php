<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Job extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('job_name');
            $table->string('main_image')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->integer('min_salary')->default(0);
            $table->integer('max_salary')->default(0);

            $table->text('another_qualification')->nullable();
            $table->text('working_time')->nullable();
            $table->text('benefits')->nullable();

            $table->uuid('near_train_station_id');
            $table->uuid('min_education_id');
            $table->uuid('company_id');

            $table->foreign('min_education_id')->references('id')->on('education');
            $table->foreign('company_id')->references('id')->on('company');
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
        Schema::drop('job');
    }
}
