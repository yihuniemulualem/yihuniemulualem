<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppleytoTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appleysToTender', function (Blueprint $table) {
            $table->id();
            $table->string('Tendernumber')->references('number')->on('tender')->onDelete('cascade');
            $table->string('TenderTitle');
            $table->string('organization');
            $table->string('Transaction');
            $table->string('Fullname');
            $table->string('phone');
            $table->string('email');
            $table->float('Netprice');
            $table->string('itemprice');
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
        Schema::dropIfExists('appleys');
    }
}
