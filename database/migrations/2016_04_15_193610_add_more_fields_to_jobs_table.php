<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->integer('job_category')->unsigned()->after('job_type');
            $table->string('job_country')->after('job_category');
            $table->string('job_state')->after('job_country');
            $table->boolean('job_is_remote')->after('job_state');
            $table->boolean('job_relocation_assistance')->after('job_is_remote');
            $table->text('job_description')->after('job_relocation_assistance');
            $table->string('job_how_to_apply')->after('job_description');;
            $table->string('job_application_method')->after('job_how_to_apply');;
            $table->text('job_application_instructions')->after('job_application_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
}
