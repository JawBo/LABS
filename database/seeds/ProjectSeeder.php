<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            [
                'name'=>'projet1',
                'text'=>'Premier projet test',
                'image'=>'img/card-3.jpg',
                'icone_id'=>'1'                
            ],
            [
                'name'=>'projet2',
                'text'=>'Deuxième projet test',
                'image'=>'img/card-1.jpg',
                'icone_id'=>'2'                
            ],
            [
                'name'=>'projet3',
                'text'=>'Troisième projet test',
                'image'=>'img/card-2.jpg',
                'icone_id'=>'3'                
            ],
            [
                'name'=>'projet4',
                'text'=>'Quatrième projet test',
                'image'=>'img/projet2.jpg',
                'icone_id'=>'4'                
            ],
            [
                'name'=>'projet5',
                'text'=>'Cinquième projet test',
                'image'=>'img/projet.jpg',
                'icone_id'=>'5'                
            ],
            [
                'name'=>'projet6',
                'text'=>'Sixième projet test',
                'image'=>'img/projet4.jpg',
                'icone_id'=>'6'                
            ],
            [
                'name'=>'projet7',
                'text'=>'Premier projet test',
                'image'=>'img/project1.png',
                'icone_id'=>'7'                
            ],





        ]);
    }
}
