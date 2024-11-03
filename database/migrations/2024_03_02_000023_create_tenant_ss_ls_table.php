<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantSsLsTable extends Migration
{
    public function up()
    {
        Schema::create('tenant_ss_ls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('domains');
            $table->string('force')->nullable();
            $table->string('webhook_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
