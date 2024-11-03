<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerProvidersTable extends Migration
{
    public function up()
    {
        Schema::create('server_providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('serverprovider')->nullable();
            $table->string('label');
            $table->string('providertype');
            $table->string('planid');
            $table->string('plandescription')->nullable();
            $table->string('region');
            $table->string('region_name')->nullable();
            $table->integer('server_providerid');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
