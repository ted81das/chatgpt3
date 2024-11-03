<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClientSecretsTable extends Migration
{
    public function up()
    {
        Schema::table('client_secrets', function (Blueprint $table) {
            $table->unsignedBigInteger('user_record_id')->nullable();
            $table->foreign('user_record_id', 'user_record_fk_9536627')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9536631')->references('id')->on('teams');
        });
    }
}
