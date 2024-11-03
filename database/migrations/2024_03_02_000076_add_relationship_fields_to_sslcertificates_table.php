<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSslcertificatesTable extends Migration
{
    public function up()
    {
        Schema::table('sslcertificates', function (Blueprint $table) {
            $table->unsignedBigInteger('site_record_id')->nullable();
            $table->foreign('site_record_id', 'site_record_fk_9537508')->references('id')->on('cloud_sites');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541918')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9537517')->references('id')->on('teams');
        });
    }
}
