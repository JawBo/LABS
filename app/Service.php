<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function icone()
{
    return $this->belongsTo('App\Icone');
}
}
