<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRunServerScriptsTable extends Migration
{
    public function up()
    {
        Schema::table('run_server_scripts', function (Blueprint $table) {
            $table->unsignedBigInteger('script_id')->nullable();
            $table->foreign('script_id', 'script_fk_9545913')->references('id')->on('server_scripts');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9545919')->references('id')->on('teams');
        });
    }
}
