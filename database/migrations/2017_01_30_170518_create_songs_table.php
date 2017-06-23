<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 250);
            $table->string('artist', 200);
            $table->string('album', 200)->nullable();
            $table->string('year', 4);
            $table->string('producer', 200);
            $table->string('image')->default('images/default.jpg');
            $table->text('description')->nullable();
            $table->integer('rating')->nullable();
            $table->integer('genre_id')->unsigned();
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
        Schema::dropIfExists('songs');
    }
}
