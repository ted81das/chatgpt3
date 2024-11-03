<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhpinstallsTable extends Migration
{
    public function up()
    {
        Schema::create('phpinstalls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('version');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
