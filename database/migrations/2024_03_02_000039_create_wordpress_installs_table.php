<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordpressInstallsTable extends Migration
{
    public function up()
    {
        Schema::create('wordpress_installs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('create_database')->nullable();
            $table->integer('server_appid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
