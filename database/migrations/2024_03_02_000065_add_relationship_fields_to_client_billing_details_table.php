<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClientBillingDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('client_billing_details', function (Blueprint $table) {
            $table->unsignedBigInteger('user_email_id')->nullable();
            $table->foreign('user_email_id', 'user_email_fk_9535389')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9535396')->references('id')->on('teams');
        });
    }
}
