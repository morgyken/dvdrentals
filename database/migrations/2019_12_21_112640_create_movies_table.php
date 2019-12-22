<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title')->index();
            $table->string('description');
            $table->string('year');
            $table->string('director');
            $table->string('classification');
            $table->string('starringid');
            $table->string('studio');
            $table->string('tagline');
            $table->string('rental');
            $table->string('purchaseprice');
            $table->string('availability');
            $table->string('imageurl');
            $table->string('genre');
            $table->rememberToken();
                     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
