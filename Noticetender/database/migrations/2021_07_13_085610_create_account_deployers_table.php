<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountDeployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AccountsTender', function (Blueprint $table) {
            $table->String('deployerid')->primary();
            $table->string('companyName');
            $table->string('Fullname');
            $table->string('Address');
            $table->string('Email');
            $table->string('OfficeTel');
            $table->string('Mobile');
            $table->string('TInNO');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_deployers');
    }
}
