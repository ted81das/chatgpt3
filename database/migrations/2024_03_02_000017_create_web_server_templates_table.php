<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebServerTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('web_server_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_webservertemplateid')->nullable();
            $table->string('label')->nullable();
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
