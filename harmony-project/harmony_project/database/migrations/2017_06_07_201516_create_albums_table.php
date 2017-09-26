<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            /* (jinyoung) 앨범번호, 사용자 id, 앨범제목, 게시글번호, 앨범사진, 앨범소개 */
            $table->increments('the_album_number');
            $table->integer('album_number');
            $table->string('user_id');
            $table->string('album_title');
            $table->string('album_picture');
            $table->string('album_content');
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
        Schema::dropIfExists('album');
    }
}
