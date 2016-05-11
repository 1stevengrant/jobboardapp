<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id')->unsigned();
            $table->string('slug')->nullable();
            $table->string('job_type')->nullable();
            $table->integer('job_category')->unsigned();
            $table->string('job_country');
            $table->string('job_state');
            $table->boolean('job_is_remote');
            $table->boolean('job_relocation_assistance');
            $table->text('job_description');
            $table->string('job_how_to_apply');
            $table->string('job_application_method');
            $table->text('job_application_instructions');
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
        Schema::drop('jobs');
    }
}
