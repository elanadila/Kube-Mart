<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
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
            $table->string('name');
            $table->bigInteger('price')->nullable();
            $table->Integer('stock')->nullable();
            $table->text('description')->nullable();
            $table->text('photo')->nullable();
            $table->bigInteger('store_id')->unsigned()->nullable();
            // $table->foreign('store_id')->reference('id')->on('stores');
            $table->bigInteger('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')->reference('id')->on('categories');
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
