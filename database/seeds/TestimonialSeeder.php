<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([

            [
                'name'=>'Michael Smith',
                'job'=>'CEO Company',
                'testimonial'=>'Ceci est le testimonial de Michael',
                'image'=>'img/avatar/01.jpg',
            ],
            [
                'name'=>'Michelle Smitha',
                'job'=>'HR Director',
                'testimonial'=>'Ceci est le testimonial de Michelle',
                'image'=>'img/avatar/02.jpg'
            ],
            [
                'name'=>'Mimi Sita',
                'job'=>'Average Client',
                'testimonial'=>' Ceci est le testi de Mimi',
                'image'=>'img/avatar/03.jpg'
            ],
            [
                'name'=>'Mick Tims',
                'job'=>'Surface Technician',
                'testimonial'=> 'That was great',
                'image'=>'img/avatar/04.png'
            ],
            [
                'name'=>'Bernaan Rangoun',
                'job'=>'Chomdu',
                'testimonial'=>'19',
                'image'=>'img/avatar/05.jpeg'
            ],
            [
                'name'=>'Sepin Chetien',
                'job'=>'Humorislolololol',
                'testimonial'=>'ma que',
                'image'=>'img/avatar/06.jpg'
            ]
        ]);
    }
}
