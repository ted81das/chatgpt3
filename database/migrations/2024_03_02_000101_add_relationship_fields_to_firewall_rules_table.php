<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFirewallRulesTable extends Migration
{
    public function up()
    {
        Schema::table('firewall_rules', function (Blueprint $table) {
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541964')->references('id')->on('users');
            $table->unsignedBigInteger('server_record_id')->nullable();
            $table->foreign('server_record_id', 'server_record_fk_9541965')->references('id')->on('cloud_servers');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9541751')->references('id')->on('teams');
        });
    }
}
