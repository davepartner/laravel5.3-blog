<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    //to prevent MassAssingment error
    protected $fillable = ['title', 'description'];
}
