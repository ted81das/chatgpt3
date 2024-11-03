<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepoInstallsTable extends Migration
{
    public function up()
    {
        Schema::create('repo_installs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provider');
            $table->string('branch')->nullable();
            $table->string('name');
            $table->integer('server_reposinstallid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
