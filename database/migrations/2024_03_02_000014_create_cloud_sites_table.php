<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloudSitesTable extends Migration
{
    public function up()
    {
        Schema::create('cloud_sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_siteid')->nullable();
            $table->string('root_domain')->nullable();
            $table->string('web_directory');
            $table->string('project_root')->nullable();
            $table->string('project_type')->nullable();
            $table->string('webhoook_url')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
