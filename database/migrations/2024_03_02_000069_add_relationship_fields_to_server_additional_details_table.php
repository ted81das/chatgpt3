<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToServerAdditionalDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('server_additional_details', function (Blueprint $table) {
            $table->unsignedBigInteger('panelserverid_id')->nullable();
            $table->foreign('panelserverid_id', 'panelserverid_fk_9536679')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541922')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9536685')->references('id')->on('teams');
        });
    }
}
