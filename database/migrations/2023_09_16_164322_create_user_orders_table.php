<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->on('users')->references('id')->cascadeOnDelete();
            $table->unsignedBigInteger('AddressID');
            $table->foreign('AddressID')->on('user_addresses')->references('id')->cascadeOnDelete();
            $table->text('Products');
            $table->text('FactorCode');
            $table->bigInteger('TotalPrice');
            $table->enum('Status' , ['Pending' , 'Paid' ,'Sending' , 'Finish']);
            $table->enum('Delivery' , ['Send' , 'InPerson' ]);
            $table->bigInteger('ShippingCost')->default(0);
            $table->date('DeliveryDate');

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
        Schema::dropIfExists('user_orders');
    }
}
