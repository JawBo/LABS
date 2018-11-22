<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name'=>'B',
                'fname'=>'J',
                'role_id'=>'1',
                'email'=>'j@m.be',
                'password'=>bcrypt('test12'),
                'image'=>'img/avatar/1.png',
                'bio'=>'machin bidule chose'

            ],
            [
                'name'=>'J',
                'fname'=>'B',
                'role_id'=>'2',
                'email'=>'b@u.be',
                'password'=>bcrypt('test12'),
                'image'=>'img/avatar/02.jpg',
                'bio'=>'lorem ispum hein'

            ],
            [
                'name'=>'Williams',
                'fname'=>'Lore',
                'role_id'=>'3',
                'email'=>'w@l.be',
                'password'=>bcrypt('test12'),
                'image'=>'img/avatar/03.jpg',
                'bio'=>'machin bidule truc chose'

            ],
            [
                'name'=>'Nymous',
                'fname'=>'Ano',
                'role_id'=>'4',
                'email'=>'',
                'password'=>bcrypt('test12'),
                'image'=>'img/avatar/ano.png',
                'bio'=>''

            ],



        ]);
    }
}
