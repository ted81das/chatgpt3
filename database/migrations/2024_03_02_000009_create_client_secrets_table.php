<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSecretsTable extends Migration
{
    public function up()
    {
        Schema::create('client_secrets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_secret_key');
            $table->string('client_secret_string');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
