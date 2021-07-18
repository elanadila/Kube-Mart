<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('price')->nullable();
            $table->bigInteger('quantity')->default(1);
            $table->text('review')->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
            // $table->foreign('product_id')->reference('id')->on('products');
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
        Schema::dropIfExists('product_transactions');
    }
}
