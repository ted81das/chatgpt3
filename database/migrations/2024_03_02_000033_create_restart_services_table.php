<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestartServicesTable extends Migration
{
    public function up()
    {
        Schema::create('restart_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
