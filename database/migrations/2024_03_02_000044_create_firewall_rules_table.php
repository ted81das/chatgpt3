<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirewallRulesTable extends Migration
{
    public function up()
    {
        Schema::create('firewall_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('server_networkid')->nullable();
            $table->string('name')->unique();
            $table->string('port');
            $table->string('type');
            $table->string('rule_type');
            $table->string('from_ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
