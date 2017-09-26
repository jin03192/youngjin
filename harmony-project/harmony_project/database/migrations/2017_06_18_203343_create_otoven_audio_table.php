<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtovenAudioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otoven_audios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject',200);
            $table->integer('first_musician_id')->unsigned();
            $table->foreign('first_musician_id')->references('id')->on('users');
            $table->integer('writer_id')->unsigned();
            $table->foreign('writer_id')->references('id')->on('users');
            $table->integer('goods');
            $table->string('album_number')->nullable();
            $table->string('instrument')->nullable();
            
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
        Schema::dropIfExists('otoven_audios');
    }
}
