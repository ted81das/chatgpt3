<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSiteTenantsTable extends Migration
{
    public function up()
    {
        Schema::table('site_tenants', function (Blueprint $table) {
            $table->unsignedBigInteger('site_record_id')->nullable();
            $table->foreign('site_record_id', 'site_record_fk_9537580')->references('id')->on('cloud_sites');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_9537586')->references('id')->on('teams');
        });
    }
}
