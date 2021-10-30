<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tender', function (Blueprint $table) {
            $table->string('deployerid')->references('deployerid')->on('AccountsTender')->onDelete('cascade');
            $table->string('category');
            $table->string('tendertype');
            $table->string('number')->primary();
            $table->string('title');
            $table->string('Organization');
            $table->date('opendate');
            $table->date('closeddate');
            $table->string('price');
            $table->string('pricetotal');
            $table->longText('detail');
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
        Schema::dropIfExists('tender');
    }
}
