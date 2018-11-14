<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'url'=>'https://www.youtube.com/watch?v=_Qz5yhNAZps'
            ],
            [
                'url'=>'https://www.youtube.com/watch?v=QH2-TGUlwu4'
            ],
            [
                'url'=>'https://www.youtube.com/watch?v=JgHfx2v9zOU'
            ]

        ]);
    }
}
