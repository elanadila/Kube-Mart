<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->text('password');
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->enum('role', ['Customer', 'Seller', 'Admin'])->nullable();
            $table->text('photo')->nullable();
            $table->BigInteger('store_id')->unsigned();
            $table->timestamps();
            // $table->foreign('store_id')->reference('id')->on('stores')->onUpdate('cascade')->delete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
