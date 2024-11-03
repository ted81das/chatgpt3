<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloudDatabasesTable extends Migration
{
    public function up()
    {
        Schema::create('cloud_databases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->integer('server_databaseid')->nullable();
            $table->string('server_databasename')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
