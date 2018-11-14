<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');

    }
    public function categories(){
        return $this->belongsToMany('App\Categorie');
    }
    public function tags(){
     return $this->belongsToMany('App\Tag');
    }
    public function comments(){
      return $this->hasMany('App\Comment');
    }
}
