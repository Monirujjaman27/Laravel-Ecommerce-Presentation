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
            $table->bigIncrements('id');
            $table->string('productName');
            $table->string('productSlug');
            $table->integer('brandId')->unsigned();
            $table->integer('categoryId')->unsigned();
            $table->text('description')->nullable();
            $table->float('price', 10,2);
            $table->float('discount', 10,2)->nullable();
            $table->tinyInteger('availability');
            $table->string('thumbnail');
            $table->tinyInteger('status');
            $table->integer('adminId')->unsigned();
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
