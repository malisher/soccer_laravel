<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Blog extends Model
{
    protected $fillable = ['name', 'content'];
    public $timestamps = false;


}
