<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    //

    protected $fillable = ['title', 'description'];

    public function notebooks(){
      return $belongsTo(Notebook::class)
    }
}
