<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject',200);
            $table->string('selected_instruments',500)->nullable();
            $table->integer('first_musician_id')->unsigned();
            $table->foreign('first_musician_id')->references('id')->on('users');
            $table->integer('writer_id')->unsigned();
            $table->foreign('writer_id')->references('id')->on('users');
            $table->integer('goods');
            $table->string('album_number')->nullable();
            $table->string('instrument')->nullable();
            $table->integer('midi_id')->unsigned();
            $table->foreign('midi_id')->references('id')->on('midis');

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
        Schema::dropIfExists('band_videos');
    }
}
