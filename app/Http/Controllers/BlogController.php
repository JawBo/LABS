<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Categorie;
use App\Image;
use App\Tag;
use App\Quote;

class BlogController extends Controller
{
    public function index(){

        $contenuArticle = Article::with('tags','categories')->get();
        $contenuCategories = Categorie::all();
        $insta = Image::all();
        $tags = Tag::all();
        $quote = Quote::all()->random(1);


        return view ('blog', compact('contenuArticle','contenuCategories','insta','tags','quote'));
    }
}
