<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTenantsTable extends Migration
{
    public function up()
    {
        Schema::create('site_tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tenants');
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
