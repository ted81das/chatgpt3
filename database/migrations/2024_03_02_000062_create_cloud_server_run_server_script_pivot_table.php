<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCloudServerRunServerScriptPivotTable extends Migration
{
    public function up()
    {
        Schema::create('cloud_server_run_server_script', function (Blueprint $table) {
            $table->unsignedBigInteger('run_server_script_id');
            $table->foreign('run_server_script_id', 'run_server_script_id_fk_9545914')->references('id')->on('run_server_scripts')->onDelete('cascade');
            $table->unsignedBigInteger('cloud_server_id');
            $table->foreign('cloud_server_id', 'cloud_server_id_fk_9545914')->references('id')->on('cloud_servers')->onDelete('cascade');
        });
    }
}
