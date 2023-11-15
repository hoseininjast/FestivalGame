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
            $table->string('ProductID');
            $table->string('Name');
            $table->text('Description');
            $table->bigInteger('Price');
            $table->bigInteger('PartnerPrice');
            $table->float('Discount')->nullable();
            $table->text('MainImage');
            $table->text('Images');
            $table->enum('Type' , ['Digital' , 'Physical']);
            $table->enum('Status' , ['Available' , 'NotAvailable']);
            $table->string('Brand');
            $table->integer('Count')->default(0);
            $table->string('Colors')->nullable();
            $table->string('Options')->nullable();
            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('SubCategoryID');
            $table->foreign('CategoryID')->references('id')->on('product_categories')->cascadeOnDelete();
            $table->foreign('SubCategoryID')->references('id')->on('product_categories')->cascadeOnDelete();
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
