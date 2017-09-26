<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidiInstrumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midi_instruments', function (Blueprint $table) {
            $table->integer('midi_id')->unsigned();
            $table->foreign('midi_id')->references('id')->on('midis')->onDelete('cascade');
            $table->string('inst_name',200);
            $table->string('inst_img')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('midi_instruments');
    }
}
