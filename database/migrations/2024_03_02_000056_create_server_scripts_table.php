<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerScriptsTable extends Migration
{
    public function up()
    {
        Schema::create('server_scripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label')->nullable();
            $table->string('user');
            $table->longText('content');
            $table->integer('server_scriptid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
