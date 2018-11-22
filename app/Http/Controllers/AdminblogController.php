<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Categorie;
use App\Tag;
use App\Comment;

class AdminblogController extends Controller
{
    public function posts(){

        $articles = Article::all();
        return view('admin.posts',compact('articles'));

    }
    public function editpost($id){

        $item = Article::find($id);
        $comments = Comment::where('article_id',$id)->with('user','article')->get();
        return view('admin.editpost',compact('item','comments'));

    }
    public function deletepost($id){

        $item = Article::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function deletecomment($id){

        $item = Comment::find($id);
        $item->delete();
        return redirect()->back();
    }
}
