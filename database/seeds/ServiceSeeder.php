<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            
            [
                'service'=>'Get in the lab',
                'icone_id'=>'1',
                'text'=> 'lorem machin truc'
            ],
            [
                'service'=>'Project Online',
                'icone_id'=>'2',
                'text'=> 'machin bidule truc'
            ],
            [
                'service'=>'Smart Marketing',
                'icone_id'=>'3',
                'text'=> 'lorem ispum machin'
            ],
            [
                'service'=>'Social Media',
                'icone_id'=>'4',
                'text'=> 'Social toussa toussa'
            ],
            [
                'service'=>'Brainstorming',
                'icone_id'=>'5',
                'text'=> 'du brainstorming quoi'
            ],
            [
                'service'=>'Documented',
                'icone_id'=>'6',
                'text'=> 'dico,internet,etc'
            ],
            [
                'service'=>'Responsive',
                'icone_id'=>'7',
                'text'=> 'lorem ispum ?'
            ],
            [
                'service'=>'Retina Ready',
                'icone_id'=>'8',
                'text'=> 'écran mac oklm'
            ],
            [
                'service'=>'Ultra Modern',
                'icone_id'=>'9',
                'text'=> 'le turfu'
            ],
        ]);
    }
}
