<?php

use Illuminate\Database\Seeder;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
        
            [
               'class'=>'flaticon-023-flask'        
            ],
            [
                'class'=>'flaticon-011-compass'
            ],
            [
                'class'=>'flaticon-037-idea'
            ],
            [
                'class'=>'flaticon-039-vector'        
            ],
            [
                'class'=>'flaticon-036-brainstorming'
            ],
            [
                'class'=>'flaticon-026-search'
            ],
            [
               'class'=>'flaticon-018-laptop-1'        
            ],
            [
                'class'=>'flaticon-043-sketch'
            ],
            [
                'class'=>'flaticon-012-cube'
            ],
            [
                'class'=>'flaticon-002-caliper'
            ],
            [
                'class'=>'flaticon-019-coffee-cup'
            ],
            [
               'class'=>'flaticon-020-creativity'        
            ],
            [
                'class'=>'flaticon-025-imagination'
            ],
            [
                'class'=>'flaticon-008-team'
            ]


        ]);
    }
}
