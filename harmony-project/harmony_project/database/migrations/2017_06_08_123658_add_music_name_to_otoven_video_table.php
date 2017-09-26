<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMusicNameToOtovenVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('otoven_videos', function(Blueprint $table) {
            $table->string('music_name');
            $table->string('genre');
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
        Schema::table('otoven_videos', function(Blueprint $table) {
        $table->dropColumn('music_name');
        $table->dropColumn('genre');
        
        });
    }
}
