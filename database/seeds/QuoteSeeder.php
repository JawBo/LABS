<?php

use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
           
            [
                'quote'=>" Don't cry because it's over, smile because it happened.",
                'author'=>'Dr. Seuss'

            ],
            [
                'quote'=>"Be yourself; everyone else is already taken.",
                'author'=>'Oscar Wilde'

            ],
            [
                'quote'=>"You only live once, but if you do it right, once is enough.",
                'author'=>'Mae West'

            ],



        ]);
    }
}
