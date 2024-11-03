<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCloudSitesTable extends Migration
{
    public function up()
    {
        Schema::table('cloud_sites', function (Blueprint $table) {
            $table->unsignedBigInteger('server_records_id')->nullable();
            $table->foreign('server_records_id', 'server_records_fk_9549808')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('system_user_id')->nullable();
            $table->foreign('system_user_id', 'system_user_fk_9537435')->references('id')->on('system_users');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541909')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9537339')->references('id')->on('teams');
        });
    }
}
