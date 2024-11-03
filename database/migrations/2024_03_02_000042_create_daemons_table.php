<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaemonsTable extends Migration
{
    public function up()
    {
        Schema::create('daemons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_daemonid')->nullable();
            $table->string('command');
            $table->integer('processes');
            $table->string('directory')->nullable();
            $table->string('create_status');
            $table->string('daemon_action')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
