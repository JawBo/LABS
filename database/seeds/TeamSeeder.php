<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([

            [
                'name'=>'Christinne Williams',
                'job'=>'Project Manager',
                'image'=>'img/team/1.jpg'
            ],
            [
                'name'=>'Chris Wil',
                'job'=>'Digital designer',
                'image'=>'img/team/3.jpg'
            ],
            [
                'name'=>'Sepho Bounboun',
                'job'=>'Graphiste askip',
                'image'=>'img/team/04.jpg'
            ],
            [
                'name'=>"S'il Vie",
                'job'=>'Web Dev soon',
                'image'=>'img/team/5.jpeg'
            ],
        ]);
    }
}
