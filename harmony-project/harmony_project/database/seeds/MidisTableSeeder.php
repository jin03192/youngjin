<?php

use Illuminate\Database\Seeder;

class MidisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////////// 11111111////////////////////
        DB::table('midis')->insert([
            'music_name'    => 'チオロプ',          // 뮤직 이름
            'path'          => 'CheerUp',           //폴더명
            'composer'      => 'トゥワイス',  //아티스트명 
            'genre'         => 'dance',             //장르
            'img'           => 'optimize.jpg',      //이미지
            ]);
        
        ////////////////// 2222222222////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'Adelitas Way',       // 뮤직 이름
            'path'          => 'AdelitasWay',        //폴더명
            'composer'      => 'Scream',     //아티스트명 
            'genre'         => 'rock',              //장르
            'img'           => 'adelitas.jpg',       //이미지
            ]);
        //////////////////// 33333333////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'TouchBy Touch',
            'path'          => 'TouchByTouch',     
            'composer'      => 'Joy',
            'genre'         => 'pop',
            'img'           => 'TouchBy.jpg',
            ]);
        ////////////////////444444444////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'Pizzcato Polka',
            'path'          => 'PizzcatoPolka',     
            'composer'      => 'Johann',
            'genre'         => 'classic',
            'img'           => 'Johann.jpg',
            ]);
        //////////////////// 555555555/////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Ice Camel',
            'path'          => 'IceCamel',     
            'composer'      => 'Camel',
            'genre'         => 'pop',
            'img'           => 'hqdefault.jpg',
            ]);
        //////////////////// 666666666///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'KerenAnn Not',
            'path'          => 'KerenAnnNot',     
            'composer'      => '403forbidden',
            'genre'         => 'pop',
            'img'           => 'KerenAnn.jpg',
            ]);
        ////////////////////77777777////////////////////
        DB::table('midis')->insert([
            'music_name'    => 'Southern Cross2011',
            'path'          => 'SouthernCross2011',     
            'composer'      => 'Camel',
            'genre'         => 'rock',
            'img'           => 'Southern.jpg',
            ]);
        //////////////////// 8888888888////////////////////   
        DB::table('midis')->insert([
            'music_name'    => '女性大統領',
            'path'          => 'womanPresident',     
            'composer'      => 'ガールズデイ',
            'genre'         => 'dance',
            'img'           => 'GirlsDay.jpg',
            ]);
        //////////////////// 99999999//////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'cygne my',
            'path'          => 'cygne',     
            'composer'      => 'Mozart',
            'genre'         => 'classic',
            'img'           => 'Mozart.jpg',
            ]);
        ////////////////////10 10 10 10 10////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'テルミ',
            'path'          => 'TellMe', 
            'composer'      => 'ワンダーガールズ',
            'genre'         => 'dance',
            'img'           => 'WonderGirls.jpg',
            ]);
        ////////////////// 11 11 11 11 11 11////////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'Grand Father',
            'path'          => 'Grandfather',     
            'composer'      => 'HenryClay',
            'genre'         => 'classic',
            'img'           => 'HenryClay.png',
            ]);
        ////////////////// 12 12 12 12 12 12 12///////////////////
        DB::table('midis')->insert([
            'music_name'    => '징기스칸',
            'path'          => 'Wikipedia',     
            'composer'      => 'DschinghisKhan',
            'genre'         => 'pop',
            'img'           => 'Wikipedia.jpg',
            ]);
        //////////////////// 13 13 13 13 13 13 13///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'WhatTheHell',
            'path'          => 'AvrilLavigne',     
            'composer'      => '에이브릴 라빈',
            'genre'         => 'rock',
            'img'           => 'AvrilLavigne.jpg',
            ]);
        //////////////////// 14 14 14 14 14 14 14///////////////////    
        DB::table('midis')->insert([
            'music_name'    => '二十三',
            'path'          => 'IUseumulset',     
            'composer'      => 'アイユ',
            'genre'         => 'dance',
            'img'           => 'iufanmeeting.jpg',
            ]); 
        //////////////////// 15 15 15 15 15 15 15///////////////////
        DB::table('midis')->insert([
            'music_name'    => '왕벌의비행',
            'path'          => 'Bumblebee',     
            'composer'      => '림스키',
            'genre'         => 'classic',
            'img'           => 'Bumblebee.jpg',
            ]);
        //////////////////// 16 16 16 16 16 16 16///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'MamaDo',
            'path'          => 'pixielottMama',     
            'composer'      => '픽시로트',
            'genre'         => 'pop',
            'img'           => 'pixielot.jpg',
            ]);
        ////////////////// 17 17 17 17 17 17 17///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'スィスゴーン',
            'path'          => 'shesgone',     
            'composer'      => 'スティールハート',
            'genre'         => 'rock',
            'img'           => 'shesgone.jpg',
            ]);
        ////////////////// 18 18 18 18 18 18 18///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'ラブムピョンピョン',
            'path'          => 'ShootingLove',     
            'composer'      => 'ラブム',
            'genre'         => 'dance',
            'img'           => 'Shooting.png',
            ]);
        //////////////////// 19 19 19 19 19 19 19///////////////////    
        DB::table('midis')->insert([
            'music_name'    => '라데츠키 행진곡',
            'path'          => 'RadetzkyMarch',     
            'composer'      => '요한슈트라우스',
            'genre'         => 'classic',
            'img'           => 'Radetzky.jpg',
            ]);
        ////////////////// 20 20 20 20 20 20 20///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'TheBeatlesHey',
            'path'          => 'HEYJUDE',     
            'composer'      => '비틀즈',
            'genre'         => 'pop',
            'img'           => 'HEYJUDES.jpg',
            ]);
        //////////////////// 21 21 21 21 21 21 21///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'GatesOfBabylon',
            'path'          => 'Rainbow',     
            'composer'      => '레인보우',
            'genre'         => 'rock',
            'img'           => 'hqdefault.jpg',
            ]);
        //////////////////// 22 22 22 22 22 22 22///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'アイ スウェル',
            'path'          => 'ISwear',     
            'composer'      => 'シスタ',
            'genre'         => 'dance',
            'img'           => 'Swear.jpg',
            ]);
        ////////////////// 23 23 23 23 23 23 23///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'CelebratedChopWaltz',
            'path'          => 'Celebrated',     
            'composer'      => '유피미아앨런',
            'genre'         => 'classic',
            'img'           => 'Waltz.jpg',
            ]);
        //////////////////// 24 24 24 24 24 24 24///////////////////    
        DB::table('midis')->insert([
            'music_name'    => 'エミネムスタン',
            'path'          => 'ShortVersion',     
            'composer'      => 'エミネム',
            'genre'         => 'pop',
            'img'           => 'Version.jpg',
            ]); 
        ////////////////// 25 25 발표시연 25 25 25///////////////////
        DB::table('midis')->insert([
            'music_name'    => '時間を走って',
            'path'          => 'aladyfriend',     
            'composer'      => 'ガールフレンド',
            'genre'         => 'dance',
            'img'           => 'maxresdefault.jpg',
            ]);
        //////////////////// 26 26 발표시연 26 26 26///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'アイロビッ',
            'path'          => 'PsyILuvIt',     
            'composer'      => 'サイ',
            'genre'         => 'dance',
            'img'           => 'PSYILUV.jpg',
            ]);
        ////////////////// 27 27 발표시연 27 27 27///////////////////
        DB::table('midis')->insert([
            'music_name'    => '레퀴엠',
            'path'          => 'minor',     
            'composer'      => '모차르트',
            'genre'         => 'classic',
            'img'           => 'maxres.jpg',
            ]);
        //////////////////// 28 28 발표시연 28 28 28///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'ScorpionsStillLovingYou',
            'path'          => 'Scorpions',     
            'composer'      => '스콜피언스',
            'genre'         => 'classic',
            'img'           => 'pions.jpg',
            ]);
        //////////////////// 29 29 발표시연 29 29 29///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'ビコーズオブ・ユー',
            'path'          => 'Clarkson',     
            'composer'      => 'ケリークラークソン',
            'genre'         => 'pop',
            'img'           => 'king.jpg',
            ]);
        //////////////////// 30 30 발표시연 30 30 30///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'カノン',
            'path'          => 'pachelbels',     
            'composer'      => 'パッヘルベル',
            'genre'         => 'classic',
            'img'           => 'canon.jpg',
            ]);
        //////////////////// 31 31 최종 31 31 31 31 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => '偶然に出くわした君',
            'path'          => 'PeregrineFalcon',     
            'composer'      => 'ハヤブサたち',
            'genre'         => 'rock',
            'img'           => 'PeregrineFalcon.jpg',
            ]);
        //////////////////// 32 32 최종 32 32 32 32 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'タイム・イズレニンアウト',
            'path'          => 'Timeisrunningout',     
            'composer'      => 'ミューズ',
            'genre'         => 'rock',
            'img'           => 'Timeisrunningout.jpg',
            ]);
        //////////////////// 33 33 최종 33 33 33 33 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'FreeStyle',
            'path'          => 'FreeStyle',     
            'composer'      => 'None',
            'genre'         => 'rock',
            'img'           => 'FreeStyleAlbum.png',
            ]);
        //////////////////// 34 34 최종 34 34 34 34 ///////////////////
        DB::table('midis')->insert([
            'music_name'    => 'ロックンロール・ウィドウ',
            'path'          => 'Rocknroll',     
            'composer'      => '山口百恵',
            'genre'         => 'rock',
            'img'           => 'Rocknroll.jpg',
            ]);
    }
}