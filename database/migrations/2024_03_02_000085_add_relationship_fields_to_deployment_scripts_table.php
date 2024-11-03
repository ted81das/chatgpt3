<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDeploymentScriptsTable extends Migration
{
    public function up()
    {
        Schema::table('deployment_scripts', function (Blueprint $table) {
            $table->unsignedBigInteger('site_record_id')->nullable();
            $table->foreign('site_record_id', 'site_record_fk_9540869')->references('id')->on('cloud_sites');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9540874')->references('id')->on('teams');
        });
    }
}
