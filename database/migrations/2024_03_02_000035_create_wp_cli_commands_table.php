<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpCliCommandsTable extends Migration
{
    public function up()
    {
        Schema::create('wp_cli_commands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('command');
            $table->string('path')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
