<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseUsersTable extends Migration
{
    public function up()
    {
        Schema::create('database_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user')->unique();
            $table->string('password');
            $table->string('remote')->nullable();
            $table->string('remote_ip')->nullable();
            $table->string('readonly')->nullable();
            $table->integer('server_dbuserid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
