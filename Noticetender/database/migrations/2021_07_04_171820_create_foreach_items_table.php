<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeachItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Applyforitems', function (Blueprint $table) {
            $table->id();
            $table->string('number')->references('number')->on('tender')->onDelete('cascade');
             $table->string('fullname');
             $table->string('phone');
             $table->string('email');
            $table->string('Quality');
            $table->string('Size');
            $table->string('Quantity');
            $table->string('itemname');
            $table->string('price');
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
        Schema::dropIfExists('foreach_items');
    }
}
