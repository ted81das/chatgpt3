<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmStatusesTable extends Migration
{
    public function up()
    {
        Schema::table('crm_statuses', function (Blueprint $table) {
            $table->unsignedBigInteger('authorid_id')->nullable();
            $table->foreign('authorid_id', 'authorid_fk_9544463')->references('id')->on('users');
        });
    }
}
