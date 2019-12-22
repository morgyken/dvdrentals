<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerrentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerrentals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('customer_id');
            $table->string('movie_id');
            $table->string('rental_date_out');
            $table->string('date_returned');
            $table->string('amount_due');
            $table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customerrentals');
    }
}
