<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemdeploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdeploys', function (Blueprint $table) {
            $table->id();
            $table->string('Tendernumber')->references('number')->on('tender')->onDelete('cascade');
            $table->string('Quality');
            $table->string('Size');
            $table->string('Quantity');
            $table->string('itemname');
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
        Schema::dropIfExists('itemdeploys');
    }
}
