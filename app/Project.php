<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function icone()
    {
        return $this->belongsTo('App\Icone');
    }
}
