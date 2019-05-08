<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('district_id')->length(3)->unsigned();
            $table->integer('category_id')->length(3)->unsigned();
            $table->integer('cost')->nullable();
            $table->float('popularity',  8, 1)->nullable();
            $table->integer('visitor')->nullable();
            $table->float('facilities',  8, 1)->nullable();
            $table->float('cleanliness',  8, 1)->nullable();
            $table->float('accessibility',  8, 1)->nullable();
            $table->string('business_hours')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
}
