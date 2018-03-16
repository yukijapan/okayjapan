<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company',function(Blueprint $table){
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('logoUrl')->nullable();
            $table->text('description')->nullable();

            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->integer('founded_year')->default(1000);
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('company_contact_email')->nullable();

            $table->uuid('perfecture_id');
            $table->uuid('city_id');
            $table->uuid('company_size_id');
            $table->uuid('industry_id');

            $table->foreign('company_size_id')->references('id')->on('company_size');
            $table->foreign('industry_id')->references('id')->on('industry');
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
        Schema::drop('company');
    }
}
