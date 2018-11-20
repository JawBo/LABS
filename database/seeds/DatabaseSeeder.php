<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(IconeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(InstaSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(QuoteSeeder::class);
        


    }
}
