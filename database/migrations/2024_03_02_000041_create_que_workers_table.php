<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueWorkersTable extends Migration
{
    public function up()
    {
        Schema::create('que_workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_queworkerid')->nullable();
            $table->string('connection');
            $table->string('queue');
            $table->integer('maximum_seconds');
            $table->integer('sleep');
            $table->integer('processes');
            $table->integer('backoff');
            $table->integer('maximum_tries')->nullable();
            $table->string('create_status')->nullable();
            $table->string('que_action')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
