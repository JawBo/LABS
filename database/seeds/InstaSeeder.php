<?php

use Illuminate\Database\Seeder;

class InstaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            

            [
                'image'=> 'img/instagram/1.jpg'
            ],
            [
                'image'=>'img/instagram/2.jpg'
            ],
            [
                'image'=> 'img/instagram/3.jpg'
            ],
            [
                'image'=>'img/instagram/4.jpg'
            ],
            [
                'image'=>'img/instagram/5.jpg'
            ],
            [
                'image'=>'img/instagram/6.jpg'
            ]


        ]);
    }
}
