<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('tags')->insert([

        [
            'tag'=>'Branding'
        ],
        [
            'tag'=>'Web Design'
        ],
        [
            'tag'=>'Photography'
        ],
        [
            'tag'=>'Programmation'
        ],
        [
            'tag'=>'Video'
        ],
        [
            'tag'=>'Inspiration'
        ]

     ]);
    }
}
