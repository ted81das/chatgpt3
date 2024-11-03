<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSshkeysTable extends Migration
{
    public function up()
    {
        Schema::table('sshkeys', function (Blueprint $table) {
            $table->unsignedBigInteger('server_record_id')->nullable();
            $table->foreign('server_record_id', 'server_record_fk_9537555')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('system_user_id')->nullable();
            $table->foreign('system_user_id', 'system_user_fk_9537558')->references('id')->on('system_users');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541919')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9537562')->references('id')->on('teams');
        });
    }
}
