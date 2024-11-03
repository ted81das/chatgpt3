<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDaemonsTable extends Migration
{
    public function up()
    {
        Schema::table('daemons', function (Blueprint $table) {
            $table->unsignedBigInteger('server_record_id')->nullable();
            $table->foreign('server_record_id', 'server_record_fk_9541714')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('panel_system_user_id')->nullable();
            $table->foreign('panel_system_user_id', 'panel_system_user_fk_9541716')->references('id')->on('system_users');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541975')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9541725')->references('id')->on('teams');
        });
    }
}