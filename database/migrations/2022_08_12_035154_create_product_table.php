<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2022_08_12_035154_create_product_table.php
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
=======
        Schema::create('products', function (Blueprint $table) {
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab:database/migrations/2022_08_01_190343_create_products_table.php
            $table->string('title');
            $table->string('price');
            $table->string('description', 500);
            $table->string('image');
<<<<<<< HEAD:database/migrations/2022_08_12_035154_create_product_table.php
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
=======
            $table->integer('category_id');
>>>>>>> f18dffac5047036861e949cc9b7128d7b4b0b7ab:database/migrations/2022_08_01_190343_create_products_table.php
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
        Schema::dropIfExists('product');
    }
};
