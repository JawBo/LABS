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
                'name'=>'J',
                'fname'=>'B',
                'role_id'=>'1',
                'email'=>'j@m.be',
                'password'=>'60474c9c10d7142b7508ce7a50acf414',
                'image'=>'img/avatar/01.jpg',
                'bio'=>'machin bidule chose'

            ],
            [
                'name'=>'B',
                'fname'=>'J',
                'role_id'=>'1',
                'email'=>'b@u.be',
                'password'=>'test24',
                'image'=>'img/avatar/02.jpg',
                'bio'=>'lorem ispum hein'

            ],
            [
                'name'=>'Williams',
                'fname'=>'Lore',
                'role_id'=>'1',
                'email'=>'w@l.be',
                'password'=>'lorewil',
                'image'=>'img/avatar/03.jpg',
                'bio'=>'machin bidule truc chose'

            ],



        ]);
    }
}
