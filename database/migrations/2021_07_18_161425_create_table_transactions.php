<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('address');
            $table->string('province');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('phone', 20)->nullable();
            $table->text('payment_prove')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            // $table->foreign('user_id')->reference('id')->on('users');
            $table->bigInteger('approval_user_id')->unsigned()->nullable();
            // $table->foreign('approval_user_id')->reference('id')->on('users');
            $table->enum('status', ['Waitingprovepayment', 'Rejected', 'Confirm', 'shipping', 'complete'])->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
