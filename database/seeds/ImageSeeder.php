<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
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
                'image'=>'carou1.jpg',
                'section'=>'carousel'

            ],
            [
                'image'=>'carou2.jpg',
                'section'=>'carousel'

            ],
            [
                'image'=>'carou4.jpeg',
                'section'=>'carousel'
            ],



        ]);
    }
}
