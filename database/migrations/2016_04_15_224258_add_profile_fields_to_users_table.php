<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('org_name')->nullable()->after('id');
            $table->string('org_type')->nullable()->after('id');
            $table->string('org_url')->nullable()->after('id');
            $table->string('org_twitter')->nullable()->after('id');
            $table->string('org_photo_path')->nullable()->after('id');
            $table->string('org_logo_path')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
