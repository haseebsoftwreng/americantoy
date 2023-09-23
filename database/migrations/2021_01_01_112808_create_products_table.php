<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->text('name');
            $table->float('price');
            $table->integer('stock')->default(10);
            $table->integer('rating')->nullable();
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->float('oldprice')->nullable();
            $table->text('handler')->nullable();
            $table->string('color')->nullable();
            $table->text('link')->nullable();
            $table->boolean('featured')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
