<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerAdditionalDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('server_additional_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ip')->nullable();
            $table->integer('ssh_port')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
