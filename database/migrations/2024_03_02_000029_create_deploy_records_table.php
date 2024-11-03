<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeployRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('deploy_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_deployid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
