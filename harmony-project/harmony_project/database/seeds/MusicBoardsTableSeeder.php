<?php

use Illuminate\Database\Seeder;

class MusicBoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Musicboard::create([
        'file_name'     => '소녀시대-NoNOno',
        'user_id'       => '1',
        'good_count'    => '3',
        'hits'          => '12',
        'album_number'  => '1',
        'instrument'    => '기타',
        'ensemble'      => 'JINYOUNG X HYUNGYUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '김건모-핑계',
        'user_id'       => '1',
        'good_count'    => '5',
        'hits'          => '8',
        'album_number'  => '3',
        'instrument'    => '기타',
        'ensemble'      => 'JINYOUNG X HYUNGYUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '윤도현-나는나비',
        'user_id'       => '1',
        'good_count'    => '4',
        'hits'          => '7',
        'album_number'  => '1',
        'instrument'    => '기타',
        'ensemble'      => 'JINYOUNG X HYUNGYUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '크라잉넛-비둘기야',
        'user_id'       => '1',
        'good_count'    => '23',
        'hits'          => '510',
        'album_number'  => '1',
        'instrument'    => '기타',
        'ensemble'      => 'NAHUM',
      ]);
      App\Musicboard::create([
        'file_name'     => '허각-하늘을 달리다',
        'user_id'       => '1',
        'good_count'    => '39',
        'hits'          => '540',
        'album_number'  => '2',
        'instrument'    => '기타',
        'ensemble'      => 'NAHUM X SUNGMIN',
      ]);
      App\Musicboard::create([
        'file_name'     => '허각-헬로우',
        'user_id'       => '2',
        'good_count'    => '14',
        'hits'          => '152',
        'instrument'    => '기타',
        'ensemble'      => 'NAHUM X SUNGMIN',
      ]);
      App\Musicboard::create([
        'file_name'     => '김범수-애인있어요',
        'user_id'       => '2',
        'good_count'    => '31',
        'hits'          => '523',
        'instrument'    => '기타',
        'ensemble'      => 'NAHUM X SUNGMIN X HYEZIN',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅마마-체념',
        'user_id'       => '2',
        'good_count'    => '23',
        'hits'          => '310',
        'instrument'    => '기타',
        'ensemble'      => 'HYEZIN X SUNGMIN',
      ]);
      App\Musicboard::create([
        'file_name'     => '김범수-제발',
        'user_id'       => '1',
        'good_count'    => '39',
        'hits'          => '540',
        'instrument'    => '기타',
        'ensemble'      => 'MINHO',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-붉은노을',
        'user_id'       => '1',
        'good_count'    => '39',
        'hits'          => '540',
        'instrument'    => '기타',
        'ensemble'      => 'MINHO',
      ]);
      App\Musicboard::create([
        'file_name'     => '김범수-첫사랑',
        'user_id'       => '2',
        'good_count'    => '39',
        'hits'          => '540',
        'album_number'  => '1',
        'instrument'    => '기타',
        'ensemble'      => 'NAHUM X MINHO',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-맨정신',
        'user_id'       => '1',
        'good_count'    => '23',
        'hits'          => '471',
        'instrument'    => '피아노',
        'ensemble'      => 'MINHO X HYUNGYUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-GIRLFRIEND',
        'user_id'       => '1',
        'good_count'    => '31',
        'hits'          => '372',
        'instrument'    => '피아노',
        'ensemble'      => 'JINYOUNG X MINHO',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-BAE BAE',
        'user_id'       => '1',
        'good_count'    => '18',
        'hits'          => '340',
        'instrument'    => '피아노',
        'ensemble'      => 'NAHUM X SUNGMIN X JINYOUNG X HYUNGYUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-IF YOU',
        'user_id'       => '1',
        'good_count'    => '8',
        'hits'          => '70',
        'instrument'    => '드럼',
        'ensemble'      => 'HYEZIN X MINHO',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-LOSER',
        'user_id'       => '1',
        'good_count'    => '12',
        'hits'          => '230',
        'instrument'    => '드럼',
        'ensemble'      => 'HYEZIN X JINYOUNG',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-뱅뱅뱅',
        'user_id'       => '1',
        'good_count'    => '50',
        'hits'          => '3030',
        'instrument'    => '드럼',
        'ensemble'      => 'NAHUN X HYEZIN',
      ]);
      App\Musicboard::create([
        'file_name'     => '빅뱅-에라모르겠다',
        'user_id'       => '1',
        'good_count'    => '102',
        'hits'          => '2902',
        'instrument'    => '드럼',
        'ensemble'      => 'JINYOUNG X HYUNGYUNG',
      ]);
    }
}
