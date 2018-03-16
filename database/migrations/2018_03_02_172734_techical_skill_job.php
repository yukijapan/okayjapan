<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TechicalSkillJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_skill_job',function(Blueprint $table){
          $table->uuid('technical_skill_id');
          $table->uuid('job_id');
          $table->foreign('job_id')->references('id')->on('job');
          $table->foreign('technical_skill_id')->references('id')->on('technical_skill');
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
        Schema::drop('technical_skill_job');
    }
}
