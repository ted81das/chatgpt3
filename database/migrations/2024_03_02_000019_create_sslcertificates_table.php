<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSslcertificatesTable extends Migration
{
    public function up()
    {
        Schema::create('sslcertificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->longText('certificate');
            $table->longText('private');
            $table->string('force')->nullable();
            $table->longText('additional')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
