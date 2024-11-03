<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPhpinstallsTable extends Migration
{
    public function up()
    {
        Schema::table('phpinstalls', function (Blueprint $table) {
            $table->unsignedBigInteger('server_record_id')->nullable();
            $table->foreign('server_record_id', 'server_record_fk_9541805')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541921')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9541810')->references('id')->on('teams');
        });
    }
}
