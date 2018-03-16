<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobUserApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_user_application',function(Blueprint $table){
          $table->uuid('user_id');
          $table->uuid('job_id');
          $table->text('pitch_text')->nullable();
          $table->enum('is_accepted',['1','0'])->default(0);
          $table->foreign('job_id')->references('id')->on('job');
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
        Schema::drop('job_user_application');
    }
}
