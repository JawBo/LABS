<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

        [
            'categorie'=>'Lorem ispum'
        ],
        [
            'categorie'=>'Test'
        ],
        [
            'categorie'=>'Tellus ut nulla'
        ],
        [
            'categorie'=>'Divertissement'
        ],
        [
            'categorie'=>'Machin'
        ],
            

        ]);
    }
}
