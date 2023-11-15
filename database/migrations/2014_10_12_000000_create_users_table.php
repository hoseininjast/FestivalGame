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
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('NationalCode')->nullable();
            $table->text('ProfileImage');
            $table->enum('NewsSletter' , ['Yes' , 'No']);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('PhoneNumber');
            $table->string('Activation_code')->nullable();
            $table->float('Charge')->default(0);
            $table->text('ShoppingCard')->nullable();
            $table->enum('Type' , ['User' , 'Partner' , 'Admin']);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
