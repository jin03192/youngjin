<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'user_id'   => 'user',
          'password'     => '123123',
          'userImage'     => 'user001.png',
          // 드럼 rock
        ]);
        App\User::create([
          'user_id' => 'jinyoung',
          'password' => '123123',
          'userImage'     => 'jinyoung.png',
          // 기타 rock
        ]);
        App\User::create([
          'user_id' => 'nahoom',
          'password' => '123123',
          'userImage'     => 'JNH_Profile_Picture.png',
          // 피아노 rock
        ]);
        App\User::create([
          'user_id' => 'minho',
          'password' => '123123',
          'userImage'     => 'minho.png',
        ]);
         // 신디 rock
        App\User::create([
          'user_id' => 'hyungyoung',
          'password' => '123123',
          'userImage'     => 'user002.png',
        ]);
        // 드럼 rock
        App\User::create([
          'user_id' => 'seoungmin',
          'password' => '123123',
          'userImage'     => 'seoungmin.png',
        ]);
        // 기타 classic
        App\User::create([
          'user_id' => 'haejin',
          'password' => '123123',
          'userImage'     => 'user003.png',
        ]);
        // 피아노 classic
        App\User::create([
          'user_id' => 'John',
          'password' => '123123',
          'userImage'     => 'user004.png',
        ]);
        // 신디 classic
        App\User::create([
          'user_id' => 'Park',
          'password' => '123123',
          'userImage'     => 'user005.png',
        ]);
        // 드럼 classic
        App\User::create([
          'user_id' => 'Mike',
          'password' => '123123',
          'userImage'     => 'user006.png',
        ]);
        // 기타 pop
        App\User::create([
          'user_id' => 'Youngjin',
          'password' => '123123',
          'userImage'     => 'user007.png',
        ]);
        // 드럼 pop
        App\User::create([
          'user_id' => 'Person',
          'password' => '123123',
          'userImage'     => 'user008.png',
        ]);
        // 신디 pop
        App\User::create([
          'user_id' => 'People',
          'password' => '123123',
          'userImage'     => 'user009.png',
        ]);
        // 피아노 pop
        App\User::create([
          'user_id' => 'God',
          'password' => '123123',
          'userImage'     => 'user010.png',
        ]);
        // 기타 dance
        App\User::create([
          'user_id' => 'Center',
          'password' => '123123',
          'userImage'     => 'user011.png',
        ]);
        // 신디 dance
        App\User::create([
          'user_id' => 'Mazenta',
          'password' => '123123',
          'userImage'     => 'user012.png',
        ]);
        // 드럼 dance
        App\User::create([
          'user_id' => 'Super',
          'password' => '123123',
          'userImage'     => 'user013.png',
        ]);
        // 피아노 dance
        App\User::create([
          'user_id' => 'Mix',
          
          'password' => '123123',
          'userImage'     => 'user014.png',
        ]);
        // 기타 rock
        App\User::create([
          'user_id' => 'Asia',
          'password' => '123123',
          'userImage'     => 'user015.png',
        ]);
        // 드럼 rock
        App\User::create([
          'user_id' => 'Europe',
          'password' => '123123',
          'userImage'     => 'user016.png',
        ]);
        // 신디 rock
        App\User::create([
          'user_id' => 'America',
          'password' => '123123',
          'userImage'     => 'user017.png',
        ]);
        // 피아노 rock
    }
}
