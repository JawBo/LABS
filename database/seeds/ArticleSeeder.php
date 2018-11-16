<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([

            [
                'name'=>'First blog post',
                'text'=>'
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime minus aspernatur nemo molestias quibusdam ad cumque, impedit consequuntur corrupti ratione veritatis fuga, totam similique laudantium aliquid qui labore libero sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam at sequi quos commodi iure! Soluta dolor neque obcaecati debitis enim, libero aut voluptates consectetur, necessitatibus hic ipsam doloremque eum! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Voluptas, eius quisquam reiciendis quidem perferendis eveniet officiis natus velit sequi architecto magni omnis, iste odio deleniti excepturi autem. Voluptas, voluptatibus similique? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum expedita maxime, dolores nostrum itaque obcaecati placeat est. Ea repellat odio minima, eos excepturi quisquam consequuntur? Sunt ab mollitia sapiente obcaecati.',
                'image'=>'img/blog/blog-1.jpg',
                'preview'=>'(preview) Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'users_id'=>'1',
                'categorie_id'=>'1',
                'tag_id'=>'1'
            ],
            [
                'name'=>'Second blog post',
                'text'=>'
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime minus aspernatur nemo molestias quibusdam ad cumque, impedit consequuntur corrupti ratione veritatis fuga, totam similique laudantium aliquid qui labore libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam at sequi quos commodi iure! Soluta dolor neque obcaecati debitis enim, libero aut voluptates consectetur, necessitatibus hic ipsam doloremque eum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eius quisquam reiciendis quidem perferendis eveniet officiis natus velit sequi architecto magni omnis, iste odio deleniti excepturi autem. Voluptas, voluptatibus similique? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum expedita maxime, dolores nostrum itaque obcaecati placeat est. Ea repellat odio minima, eos excepturi quisquam consequuntur? Sunt ab mollitia sapiente obcaecati.',
                'image'=>'img/blog/blog-2.jpg',
                'preview'=>' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'users_id'=>'2',
                'categorie_id'=>'1',
                'tag_id'=>'3'

            ],
            [
                'name'=>'Third blog post',
                'text'=>' 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime minus aspernatur nemo molestias quibusdam ad cumque, impedit consequuntur corrupti ratione veritatis fuga, totam similique laudantium aliquid qui labore libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam at sequi quos commodi iure! Soluta dolor neque obcaecati debitis enim, libero aut voluptates consectetur, necessitatibus hic ipsam doloremque eum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eius quisquam reiciendis quidem perferendis eveniet officiis natus velit sequi architecto magni omnis, iste odio deleniti excepturi autem. Voluptas, voluptatibus similique? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum expedita maxime, dolores nostrum itaque obcaecati placeat est. Ea repellat odio minima, eos excepturi quisquam consequuntur? Sunt ab mollitia sapiente obcaecati.',
                'image'=>'img/blog/blog-3.jpg',
                'preview'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'users_id'=>'3',
                'categorie_id'=>'1',
                'tag_id'=>'2'

            ],
            [
                'name'=>'Fourth blog post',
                'text'=>'
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime minus aspernatur nemo molestias quibusdam ad cumque, impedit consequuntur corrupti ratione veritatis fuga, totam similique laudantium aliquid qui labore libero sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam at sequi quos commodi iure! Soluta dolor neque obcaecati debitis enim, libero aut voluptates consectetur, necessitatibus hic ipsam doloremque eum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eius quisquam reiciendis quidem perferendis eveniet officiis natus velit sequi architecto magni omnis, iste odio deleniti excepturi autem. Voluptas, voluptatibus similique? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum expedita maxime, dolores nostrum itaque obcaecati placeat est. Ea repellat odio minima, eos excepturi quisquam consequuntur? Sunt ab mollitia sapiente obcaecati.',
                'image'=>'img/blog/blog-1.jpg',
                'preview'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo.',
                'users_id'=>'3',
                'categorie_id'=>'1',
                'tag_id'=>'3'
            ],
            
            
            ]);
            $articles = App\Article::all();
            $articles->each(function($article) {
    
                    $article->tags()->attach($article->tag_id);
            });
    }
}
