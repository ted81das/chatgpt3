<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeployEnvironmentsTable extends Migration
{
    public function up()
    {
        Schema::create('deploy_environments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
