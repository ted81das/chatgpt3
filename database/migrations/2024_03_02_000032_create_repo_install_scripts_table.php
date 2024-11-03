<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepoInstallScriptsTable extends Migration
{
    public function up()
    {
        Schema::create('repo_install_scripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('script');
            $table->integer('server_repoinitialdeployid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
