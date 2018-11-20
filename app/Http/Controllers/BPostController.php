<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Categorie;
use App\Image;
use App\Tag;
use App\Quote;
use App\Comment;

class BPostController extends Controller
{
    // public function index(){

    //     $contenuArticle = Article::with('tags')->get();
    //     $categories = Categorie::all();
    //     $insta = Image::all();
    //     $tags = Tag::all();
    //     $quote = Quote::all()->random(1);

    //     return view ('blogPost', compact('contenuArticle','categories','insta','tags','quote'));

    // }
    public function article($id){
        
        $article = Article::find($id)->with('tags','categories','user')->first();
        $categories = Categorie::all();
        $insta = Image::all();
        $tags = Tag::all();
        $contenuComments = Comment::with('user')->get();
        $quote = Quote::all()->random(1);
      

        return view ('blogPost', compact('article','categories','insta','tags','quote','contenuComments'));


    }
}
