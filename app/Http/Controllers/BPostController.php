<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Article;
use App\Categorie;
use App\Image;
use App\Tag;
use App\Quote;
use App\Comment;
use App\Http\Requests\CommentRequest;
class BPostController extends Controller
{
    // public function index(){

    //     $contenuArticle = Article::with('tags')->get();²
    //     $categories = Categorie::all();
    //     $insta = Image::all();
    //     $tags = Tag::all();
    //     $quote = Quote::all()->random(1);

    //     return view ('blogPost', compact('contenuArticle','categories','insta','tags','quote'));

    // }
    public function article($id){
        
        $article = Article::where('id',$id)->with('categories','user','tags','comments')->first();
        
        $contenuCategories = Categorie::all();
        $insta = Image::all();
        $tags = Tag::all();
        $contenuComments = Comment::where('article_id',$id)->with('user','article')->get();
        $quote = Quote::all()->random(1);
      

        return view ('blogPost', compact('article','contenuCategories','insta','tags','quote','contenuComments'));


    }
    public function create(CommentRequest $request,$id){
        $comment = new Comment;
        $comment->article_id=$id;
        if(Auth::user()){
            $comment->name = Auth::user()->name;
            $comment->email = Auth::user()->email;
            $comment->users_id= Auth::user()->id;
            if(Auth::user()->roles_id==1){
              $comment->valid = true;
            }
        } 
        else {
            $comment->users_id="4";
            if ($request->name) {
              $comment->name = $request->name;
             
            } else {
              $comment->name = 'Anonymous';
            }
            if ($request->email) {
              $comment->email = $request->email;
            } else {
              $comment->email = null;
            }
          }
        $comment->name = $request->name;
        $comment->email=$request->email;
        $comment->comment=$request->comment;
        $comment->save();
        return redirect()->back();


    }
}
