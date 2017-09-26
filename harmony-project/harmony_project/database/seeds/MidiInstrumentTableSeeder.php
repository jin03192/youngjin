<?php

use Illuminate\Database\Seeder;

class MidiInstrumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //////////////////// 1 1 1 1 1 1 1///////////////////   
        DB::table('midi_instruments')->insert([
            'midi_id'    => '1',
            'inst_name'  => 'Clarinet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '1',
            'inst_name'  => 'Organ.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '1',
            'inst_name'  => 'Steel.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '1',
            'inst_name'  => 'Etc.mp3',
            ]);
            
         //////////////////// 2 2 2 2 2 2 2///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '2',
        //     'inst_name'  => 'Distortion.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '2',
        //     'inst_name'  => 'FingerBass.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '2',
        //     'inst_name'  => 'overdrive.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '2',
        //     'inst_name'  => 'overdrive2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '2',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
         //////////////////// 3 3 3 3 3 3 3///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '3',
        //     'inst_name'  => 'Base.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '3',
        //     'inst_name'  => 'Guitar2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '3',
        //     'inst_name'  => 'Vocal.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '3',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
        //////////////////// 4 4 4 4 4 4 4///////////////////   
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '4',
        //     'inst_name'  => 'ClarinetinBbI.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '4',
        //     'inst_name'  => 'Flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '4',
        //     'inst_name'  => 'Piccolo.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '4',
        //     'inst_name'  => 'Viola.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '4',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
      
      //////////////////// 5 5 5 5 5 5 5///////////////////   
    //   DB::table('midi_instruments')->insert([
    //         'midi_id'    => '5',
    //         'inst_name'  => 'GrandPno.mp3',
    //         ]);
            
      //////////////////// 6 6 6 6 6 6 6///////////////////   
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '6',
        //     'inst_name'  => 'flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '6',
        //     'inst_name'  => 'nylon.mp3',
        //     ]);

      //////////////////// 7 7 7 7 7 7 7///////////////////   
        DB::table('midi_instruments')->insert([
            'midi_id'    => '7',
            'inst_name'  => 'AcousticPiano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '7',
            'inst_name'  => 'Bass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '7',
            'inst_name'  => 'Gutier.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '7',
            'inst_name'  => 'Trumpet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '7',
            'inst_name'  => 'Etc.mp3',
            ]);
            
         //////////////////// 8 8 8 8 8 8 8///////////////////       
        DB::table('midi_instruments')->insert([
            'midi_id'    => '8',
            'inst_name'  => 'clarinet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '8',
            'inst_name'  => 'sawLd.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '8',
            'inst_name'  => 'Etc.mp3',
            ]);
            
        //////////////////// 9 9 9 9 9 9 9///////////////////      
    //   DB::table('midi_instruments')->insert([
    //         'midi_id'    => '9',
    //         'inst_name'  => 'AcoustPiano.mp3',
    //         ]);
    //     DB::table('midi_instruments')->insert([
    //         'midi_id'    => '9',
    //         'inst_name'  => 'Cello2.mp3',
    //         ]);
    //     DB::table('midi_instruments')->insert([
    //         'midi_id'    => '9',
    //         'inst_name'  => 'Etc.mp3',
    //         ]);
            
      //////////////////// 10 10 10 10 10 10 10///////////////////   
      DB::table('midi_instruments')->insert([
            'midi_id'    => '10',
            'inst_name'  => 'Bass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '10',
            'inst_name'  => 'ModernJazz.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '10',
            'inst_name'  => 'SquareLd.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '10',
            'inst_name'  => 'SquareLd2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '10',
            'inst_name'  => 'Etc.mp3',
            ]);
        
        //////////////////// 11 11 11 11 11 11 11///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '11',
        //     'inst_name'  => 'AcousticPiano.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '11',
        //     'inst_name'  => 'AcousticPiano2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '11',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
        
        //////////////////// 12 12 12 12 12 12 12///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'AahChoir.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'FingerBass.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'Mute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'RockPiano.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'StereoSt1.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '12',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
        //////////////////// 13 13 13 13 13 13 13///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '13',
        //     'inst_name'  => 'CharanLd.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '13',
        //     'inst_name'  => 'FingerBass.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '13',
        //     'inst_name'  => 'tortion.mp3',
        //     ]);
            
            
        //////////////////// 14 14 14 14 14 14 14///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '14',
        //     'inst_name'  => 'CharanLd.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '14',
        //     'inst_name'  => 'FingerBass.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '14',
        //     'inst_name'  => 'tortion.mp3',
        //     ]);
            
        //////////////////// 15 15 15 15 15 15 15///////////////////   
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'Bassoon.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'Clarinet.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'Contrabass.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'Trumpet.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '15',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
        //////////////////// 16 16 16 16 16 16 16///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'AcousticPiano.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'Clean.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'Flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'SawLd.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'StereoSt1.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '16',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
        //////////////////// 17 17 17 17 17 17 17///////////////////   
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'AcousticPiano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'Distortion.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'FingerBass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'SterepSt1.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'SterepSt2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '17',
            'inst_name'  => 'Etc.mp3',
            ]);
            
        //////////////////// 18 18 18 18 18 18 18///////////////////       
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'Clarinet.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'Clean.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'Overdrive.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'SawLd.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'SawLd2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '18',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
        //////////////////// 19 19 19 19 19 19 19///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'BrassSect.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'Fhorns.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'Piccolo.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'StereoSt1.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'StereoSt2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '19',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
            
        //////////////////// 20 20 20 20 20 20 20///////////////////    
        DB::table('midi_instruments')->insert([
            'midi_id'    => '20',
            'inst_name'  => 'AcousticPiano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '20',
            'inst_name'  => 'ModernJazz.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '20',
            'inst_name'  => 'ModernJazz2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '20',
            'inst_name'  => 'SynStrings.mp3',
            ]);
            
        //////////////////// 21 21 21 21 21 21 21///////////////////    
        DB::table('midi_instruments')->insert([
            'midi_id'    => '21',
            'inst_name'  => 'Distortion.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '21',
            'inst_name'  => 'ReadOrgan.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '21',
            'inst_name'  => 'ModernJazz2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '21',
            'inst_name'  => 'Etc.mp3',
            ]);
        //////////////////// 22 22 22 22 22 22 22///////////////////
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'BrassSect.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'BrassSect2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'Clean.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'Distortion.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'RockPiano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '22',
            'inst_name'  => 'Etc.mp3',
            ]);
        //////////////////// 23 23 23 23 23 23 23///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'Clarinet.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'Flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'StereoSt1.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'StereoSt2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'Trombone2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '23',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
        //////////////////// 24 24 24 24 24 24 24///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '24',
        //     'inst_name'  => 'Fretless2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '24',
        //     'inst_name'  => 'Steel.mp3',
        //     ]);
        //////////////////// 25 25 25 25 25 25 25///////////////////
        DB::table('midi_instruments')->insert([
            'midi_id'    => '25',
            'inst_name'  => 'Clarinet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '25',
            'inst_name'  => 'Distortion.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '25',
            'inst_name'  => 'RockPiano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '25',
            'inst_name'  => 'Etc.mp3',
            ]);
        //////////////////// 26 26 26 26 26 26 26///////////////////
        DB::table('midi_instruments')->insert([
            'midi_id'    => '26',
            'inst_name'  => 'BrassSect.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '26',
            'inst_name'  => 'Clean.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '26',
            'inst_name'  => 'SawLd.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '26',
            'inst_name'  => 'Etc.mp3',
            ]);
      //////////////////// 27 27 27 27 27 27 27///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '27',
        //     'inst_name'  => 'Flute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '27',
        //     'inst_name'  => 'StereoSt1.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '27',
        //     'inst_name'  => 'StereoSt2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '27',
        //     'inst_name'  => 'Trombone2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '27',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
      //////////////////// 28 28 28 28 28 28 28///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '28',
        //     'inst_name'  => 'ModernJazz.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '28',
        //     'inst_name'  => 'Nylon.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '28',
        //     'inst_name'  => 'Overdrive.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '28',
        //     'inst_name'  => 'panflute.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '28',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
      //////////////////// 29 29 29 29 29 29 29///////////////////
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '29',
        //     'inst_name'  => 'AcousticPiano.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '29',
        //     'inst_name'  => 'StereoSt2.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '29',
        //     'inst_name'  => 'SynVoice.mp3',
        //     ]);
        // DB::table('midi_instruments')->insert([
        //     'midi_id'    => '29',
        //     'inst_name'  => 'Etc.mp3',
        //     ]);
      //////////////////// 30 30 30 30 30 30 30///////////////////
        DB::table('midi_instruments')->insert([
            'midi_id'    => '30',
            'inst_name'  => 'Distortion.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '30',
            'inst_name'  => 'Distortion2.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '30',
            'inst_name'  => 'FingerBass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '30',
            'inst_name'  => 'Etc.mp3',
            ]);
       ////////////////////// 31 31 31 31 31 31 31///////////////////
        
        DB::table('midi_instruments')->insert([
            'midi_id'    => '31',
            'inst_name'  => 'Bass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '31',
            'inst_name'  => 'Clarinet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '31',
            'inst_name'  => 'Drum.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '31',
            'inst_name'  => 'Guitar.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '31',
            'inst_name'  => 'Etc.mp3',
            ]);
            
            
        ////////////////////// 32 32 32 32 32 32 32/////////////////// 
        DB::table('midi_instruments')->insert([
            'midi_id'    => '32',
            'inst_name'  => 'Bass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '32',
            'inst_name'  => 'Clarinet.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '32',
            'inst_name'  => 'Drum.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '32',
            'inst_name'  => 'Guitar.mp3',
            ]);
            
        ////////////////////// 33 33 33 33 33 33 /////////////////// 
        DB::table('midi_instruments')->insert([
            'midi_id'    => '33',
            'inst_name'  => 'freestyle.mp3',
            ]);
            
        ////////////////////// 34 34 34 34 34 34 34/////////////////// 
        DB::table('midi_instruments')->insert([
            'midi_id'    => '34',
            'inst_name'  => 'Bass.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '34',
            'inst_name'  => 'Piano.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '34',
            'inst_name'  => 'Drum.mp3',
            ]);
        DB::table('midi_instruments')->insert([
            'midi_id'    => '34',
            'inst_name'  => 'Guitar.mp3',
            ]);
    }
}