<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainAliasesTable extends Migration
{
    public function up()
    {
        Schema::create('domain_aliases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aliases');
            $table->integer('server_aliasid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
