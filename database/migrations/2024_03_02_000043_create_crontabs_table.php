<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrontabsTable extends Migration
{
    public function up()
    {
        Schema::create('crontabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_crontabid')->nullable();
            $table->string('user');
            $table->string('command');
            $table->string('frequency');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
