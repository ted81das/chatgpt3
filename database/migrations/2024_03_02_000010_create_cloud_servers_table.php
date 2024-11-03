<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloudServersTable extends Migration
{
    public function up()
    {
        Schema::create('cloud_servers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serverorderid')->unique();
            $table->string('clientbillingorderid')->unique();
            $table->integer('serverserverid')->nullable();
            $table->string('name')->unique();
            $table->integer('credential')->nullable();
            $table->string('plan');
            $table->string('region');
            $table->string('cloud_type')->nullable();
            $table->string('type');
            $table->string('database_type')->nullable();
            $table->string('webserver_type');
            $table->string('os_type')->nullable();
            $table->string('php_version');
            $table->string('description')->nullable();
            $table->string('install_monitoring')->nullable();
            $table->string('webhook_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
