<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidiTable extends Migration
{
    public function up()
    {
        Schema::create('midis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('music_name',100);
            $table->string('path',100);
            $table->string('composer',100);
            $table->string('genre',100);
            $table->string('img',200);
             
        });
    }

    public function down()
    {
        Schema::dropIfExists('midis');
    }
}
