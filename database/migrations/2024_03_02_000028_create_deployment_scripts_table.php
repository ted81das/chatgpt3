<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeploymentScriptsTable extends Migration
{
    public function up()
    {
        Schema::create('deployment_scripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('deploy_script');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
