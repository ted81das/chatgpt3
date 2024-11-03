<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDeployRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('deploy_records', function (Blueprint $table) {
            $table->unsignedBigInteger('site_record_id')->nullable();
            $table->foreign('site_record_id', 'site_record_fk_9540876')->references('id')->on('cloud_sites');
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9541971')->references('id')->on('users');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9540880')->references('id')->on('teams');
        });
    }
}
