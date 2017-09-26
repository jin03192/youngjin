<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(MusicBoardsTableSeeder::class);
        $this->call(MidisTableSeeder::class);
        $this->call(MidiInstrumentTableSeeder::class);
    }
}
