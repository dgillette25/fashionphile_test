<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
                  
                  $table->increments('id');
                  $table->string('name', 255)->nullable();
                  $table->string('email', 255)->nullable();
                  $table->string('website', 255)->nullable();
                  $table->text('cover_letter');
                  $table->integer('job_id')->unsigned();
                  $table->timestamps();

                  $table->foreign('job_id')->references('id')->on('jobs');
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
