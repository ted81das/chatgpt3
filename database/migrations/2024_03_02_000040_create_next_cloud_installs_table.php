<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNextCloudInstallsTable extends Migration
{
    public function up()
    {
        Schema::create('next_cloud_installs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_appid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
