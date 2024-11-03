<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCloudServersTable extends Migration
{
    public function up()
    {
        Schema::table('cloud_servers', function (Blueprint $table) {
            $table->unsignedBigInteger('clientpaneluserid_id')->nullable();
            $table->foreign('clientpaneluserid_id', 'clientpaneluserid_fk_9536659')->references('id')->on('users');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9536660')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9536677')->references('id')->on('teams');
        });
    }
}
